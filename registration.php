<?php
/**
* Template Name: Registration Page
*/
get_header();
// Setting up stripe api
require_once('vendor/autoload.php');
$stripe = [
	'publishable' 	=> 'pk_test_pmx83P9d4qmgqIR87kV4e57G',
	'private' 		=> 'sk_test_6EXNH7gMr2obIrHyOXx6oRCB'
	];
Stripe::setApiKey($stripe['private']);
 ?>
<style type="text/css">
	
	form#register-form {
	    width: 400px;
	    margin: 0 auto;
	    padding: 25px;
	    background: #fff;
	    border: 1px solid #ddd;
	    margin-top: -60px;
	}

	form#register-form p {
	    margin-top: 0;
	    margin-bottom: 10px;
	    line-height: 30px;
	}

	form#register-form p label {
	    color: #72777c;
	    font-size: 16px;
	    font-weight: 500;
	    margin-bottom: 0;
	}

	form#register-form input[type='text'],
	form#register-form input[type='password'],
	form#register-form input[type='email'],
	form#register-form p div,
	form#register-form p .field,
	form#register-form select {
	    background: #fbfbfb!important;
	    width: 100%;
	    padding: 10px;
	    margin: 2px 6px 0px 0;
	    border: 1px solid #ddd;
	    -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, .07);
	    box-shadow: inset 0 1px 2px rgba(0, 0, 0, .07);
	    color: #32373c;
	    outline: 0;
	    border-radius: 0;
	}
	
	.button-primary {
  float: left;
  display: block;
  background: #666EE8;
  color: white;
  box-shadow: 0 7px 14px 0 rgba(49,49,93,0.10),
              0 3px 6px 0 rgba(0,0,0,0.08);
  border-radius: 4px;
  border: 0;
  margin-top: 20px;
  font-size: 15px;
  font-weight: 400;
  width: 100%;
  height: 40px;
  line-height: 38px;
  outline: none;
	    /* border-radius: 0 !important;
	    background: #0085ba !important;
	    color: white !important;
	    padding: 10px 20px;
	    border: 1px solid #ccc;
	    cursor: pointer; */
	}
</style>
<script src="https://js.stripe.com/v3/"></script>
<div id="content">
	<div class="container free_text_search_result">
		<form action="" method="post" id="register-form">
		<?php
		if (isset($_POST['username'])) {
			global $reg_errors;
			$username 		= sanitize_user( $_POST['username'] );
	        $password 		= esc_attr( $_POST['password'] );
	        $email    		= sanitize_email( $_POST['email'] );
	        $plan     		= esc_attr( $_POST['plan_id'] );
	        $gender     	= esc_attr( $_POST['gender'] );
	        $company_type   = esc_attr( $_POST['company-type'] );
	        $company_name   = esc_attr( $_POST['company-name'] );
	        $phone_number   = esc_attr( $_POST['phone-number'] );

			$reg_errors = new WP_Error;

			$nonce_name   = isset( $_POST['access_token'] ) ? $_POST['access_token'] : '';
	        $nonce_action = 'access_token_action';
	 
	        if ( ! isset( $nonce_name ) ) {
	            $reg_errors->add('Access_token', 'Access token is missing');
	        }
	 
	        // Check if nonce is valid.
	        if ( ! wp_verify_nonce( $nonce_name, $nonce_action ) ) {
	            $reg_errors->add('Access_token', 'Access token did not verify!');
	        }
			if ( empty( $username ) || empty( $password ) || empty( $email ) || empty( $phone_number ) ) {
				$reg_errors->add('field', 'Required form field is missing');
			}
			if (empty( $plan ) ) {
				$reg_errors->add('field', 'You need to select a plan');
			}
			if ( 4 > strlen( $username ) ) {
				$reg_errors->add( 'username_length', 'Username too short. At least 4 characters is required' );
			}
			if ( username_exists( $username ) )
				$reg_errors->add('user_name', 'Sorry, that username already exists!');
			if ( ! validate_username( $username ) ) {
				$reg_errors->add( 'username_invalid', 'Sorry, the username you entered is not valid' );
			}
			if ( 5 > strlen( $password ) ) {
				$reg_errors->add( 'password', 'Password length must be greater than 5' );
			}
			if ( !is_email( $email ) ) {
				$reg_errors->add( 'email_invalid', 'Email is not valid' );
			}

			if ( email_exists( $email ) ) {
				$reg_errors->add( 'email', 'Email Already in use' );
			}
			if ( is_wp_error( $reg_errors ) ) {

				foreach ( $reg_errors->get_error_messages() as $error ) {
				 
				    echo '<div>';
				    echo '<strong>ERROR</strong>:';
				    echo $error . '<br/>';
				    echo '</div>';
				     
				}
				if ( 1 > count( $reg_errors->get_error_messages() ) ) {
			        $userdata = array(
				        'user_login'    =>   $username,
				        'user_email'    =>   $email,
				        'user_pass'     =>   $password
			        );
			        
					
					// Handle post when user paid
			        $secret_code = substr(md5(microtime()),rand(0,26),5);
			        $user = wp_insert_user( $userdata );
			        add_user_meta( $user, 'plan', $plan, true ); 
			        add_user_meta( $user, 'gender', $gender, true ); 
			        add_user_meta( $user, 'company-type', $company_type, true ); 
		        	add_user_meta( $user, 'company-name', $company_name, true ); 
		        	add_user_meta( $user, 'secret-code', $secret_code, true ); 
		        	add_user_meta( $user, 'state', 'pending', true ); 
		        	add_user_meta( $user, 'phone_number', $phone_number, true );
		        	add_user_meta( $user, 'is_purchase', false, true ); 

		        	$plan_meta = get_post_meta($plan , '_tc_tablemeta', true )[0];
					$package_price = intval($plan_meta['package_price'])*100*intval($_POST['pay_for']);
					// SMS Verify message code go here
		        	$message = "Hi, $username. ";
		        	$message .= 'Please click on this link below to activate your account: ';
					$message .= get_site_url() . '/activate?uid=' . $user . '&secret_code=' . $secret_code;
					$url = "http://bulk.sms-india.in/unified.php?usr=28790&pwd=udaipur123&ph=".$phone_number."&sndr=DAILYL&text=$message";
			  		@file_get_contents($url);
			        echo 'Registration complete. Please check your sms message to activate your account.';


		        	if (isset($_POST['stripeToken'])) {
						
						// Charge the user's card:
						Stripe_Charge::create(array(
						  "amount" => $package_price,
						  "currency" => "usd",
						  "description" => "Purchase Plan",
						  "source" => $_POST['stripeToken'],
						));
						

						if (add_user_meta( $user_id, 'is_purchase', true, true )) {
							update_user_meta( $user_id, 'is_purchase', true );
						}
						$_SESSION['flass_message'] 	= "<strong>Congratulation!</strong> Your account is paid for {$_POST['pay_for']} month! Please activate your account by the SMS!";
						$_SESSION['isset_message'] 	= true;
						$_SESSION['message_type'] 	= 'success';
					}
		        	   
			        wp_redirect( home_url(), 302 ); //exit;
			        // echo 'Registration complete. Please check your sms message to activate your account. Goto <a href="' . $_POST['doc_url'] . '">Document page</a>.';   
			    }
			}
		}

		?>
	    	<p>
	    		<label for="username">Username:</label>
	    		<input type="text" name="username" value="<?= ( isset( $_POST['username'] ) ? $username : null ) ?>" required>
	    		<input type="hidden" name="doc_url" value="<?= (isset($_POST['doc_url'])) ? $_POST['doc_url'] : null ?>">
	    	</p>

	    	<p>
			    <label for="password">Password:</label>
			    <input type="password" name="password" value="<?= ( isset( $_POST['password'] ) ? $password : null ) ?>" required>
		    </p>
     
		    <p>
			    <label for="email">Email:</label>
			    <input type="email" name="email" value="<?= ( isset( $_POST['email']) ? $email : null ) ?>" required>
		    </p>

		    <p>
			    <label for="plan">Plan:</label>
			    <select name="plan_id" id="plan">
			    	
					<?php 
					global $wpdb;
					$args = array(
						'post_type' => 'tcpricingtable',
						'orderby'   => 'date',
						'order'     => 'ASC'
					);
					$plan = new WP_Query( $args );
					if ( $plan->have_posts() ) {
						$i = 0;
						while ( $plan->have_posts() ) {

							$plan->the_post();
							?>
							<option value="<?php the_ID();?>" <?= (isset( $_POST['plan_id']) && $_POST['plan_id'] == get_the_ID() ) ? "selected" : "" ?>>
								<?php the_title() ;?>
							</option>
							<?php
						}
					}?>
			    </select>
		    </p>

		    <p>
		    	<label for="gender">Gender:</label>
		    	<select name="gender" id="gender">
					<option value="1" selected="selected">Male</option>
					<option value="2">Female</option>
					<option value="3">Other</option>
				</select>
		    </p>

		    <p>
		    	<label for="company-type">Company Type:</label>
		    	<select name="company-type" id="company-type">
					<option value="1" selected="selected">Individual</option>
					<option value="2">Corporate</option>
					<option value="3">Institude User</option>
					<option value="4">Goverment User</option>
				</select>
		    </p>

		    <p>
		    	<label for="company-name">Company Name:</label>
		    	<input type="text" placeholder="Company Name" name="company-name" id="company-name">
		    </p>

		    <p>
		    	<label for="company-name">Phone Number (*):</label>
		    	<input type="text" placeholder="000 000 0000" name="phone-number" id="phone-number" pattern="^\d{4,}$" title="Invalid number" required="">
		    </p>
     		<p>
     			<label for="address-zip">ZIP Code:</label>
     			<input name="address-zip" id="address-zip" type="text" class="field" placeholder="94110" />
     		</p>
     		<p>
     			<label for="card-element">Card:</label>
     			<div name="card-element" id="card-element" class="field"/></div>
     		</p>
     		<p>
     			<label for="pay_for">Pay for:</label>
     			<select name="pay_for" id="pay_for">
     				<option value="1" selected="selected">1 Month</option>
     				<option value="2">2 Month</option>
     				<option value="3">3 Month</option>
     				<option value="4">4 Month</option>
     				<option value="5">5 Month</option>
     				<option value="6">6 Month</option>
     				<option value="7">7 Month</option>
     				<option value="8">8 Month</option>
     				<option value="9">9 Month</option>
     				<option value="10">10 Month</option>
     				<option value="11">11 Month</option>
     				<option value="12">12 Month</option>
     			</select>
		      	<input type="hidden" name="stripeToken" id="stripeToken">
     		</p>
     		<?php wp_nonce_field( 'access_token_action', 'access_token' ); ?>
    		<!-- <input type="submit" class="button-primary" name="submit" value="Register"/> -->
			<button type="submit" class="button-primary">Pay</button>
    	</form>
	</div>
</div>

<script type="text/javascript">
var stripe = Stripe('pk_test_pmx83P9d4qmgqIR87kV4e57G');
var elements = stripe.elements();

var card = elements.create('card', {
	hidePostalCode: true,
	style: {
	    base: {
	      	iconColor: '#F99A52',
	      	color: '#32315E',
	      	lineHeight: '48px',
	      	fontWeight: 400,
	      	fontFamily: '"Helvetica Neue", "Helvetica", sans-serif',
	      	fontSize: '15px',
	      	'::placeholder': {
	        	color: '#CFD7DF',
	      	}
	    },
	}
});
card.mount('#card-element');

function setOutcome(result) {
  	
  	if (result.token) {
	    jQuery('#stripeToken').val(result.token.id) ;
  	} 
}

card.on('change', function(event) {
  	var extraDetails = {
    	name: jQuery('input[name=username]').val(),
    	email: jQuery('input[name=email]').val(),
    	address_zip: jQuery('input[name=address-zip]').val()
  	};
  	stripe.createToken(card, extraDetails).then(setOutcome);
});

</script>

<?php get_footer(); ?>