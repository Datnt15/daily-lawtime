<?php 

/*
Template name: Checkout Page
 */
if (!is_user_logged_in()) {
	wp_safe_redirect( home_url() );
}
get_header();?>
<?php 

// Setting up stripe api
require_once('vendor/autoload.php');
$stripe = [
	'publishable' 	=> 'pk_test_pmx83P9d4qmgqIR87kV4e57G',
	'private' 		=> 'sk_test_6EXNH7gMr2obIrHyOXx6oRCB'
	];
Stripe::setApiKey($stripe['private']);


// Get user data
$user_id = get_current_user_id();
$user = get_userdata( $user_id )->data;
$plan_id = get_user_meta( $user_id, 'plan', true );

$plan = get_post($plan_id);
$plan_meta = get_post_meta($plan_id , '_tc_tablemeta', true )[0];
$package_price = $plan_meta['package_price']*100;
$is_purchase = get_user_meta( $user_id, 'is_purchase', true );
if ($is_purchase=='') {
	$is_purchase=false;
}

// Handle post when user paid
if (isset($_POST['stripeToken'])) {
	// // Charge the user's card:
	if (!$is_purchase) {
		Stripe_Charge::create(array(
		  "amount" => $package_price,
		  "currency" => "usd",
		  "description" => "Purchase Plan",
		  "source" => $_POST['stripeToken'],
		));
	}

	if (add_user_meta( $user_id, 'is_purchase', true, true )) {
		update_user_meta( $user_id, 'is_purchase', true );
	}
}


// Set output content
$output ='<div class="tcpt-wrap">';
$output .= '<div style="color:' . $plan_meta['plan_color'] . '; background-color:'. $plan_meta['plan_bg_color'] . ';"  class="tcpt_single_column"> <ul class="tcpt-flist">';

if(!empty($plan_meta['plan_title'])){
    $output .= '<li style="color:' . $plan_meta['plan_h_color'] . '; background-color:'. $plan_meta['plan_hbg_color'] . ';" class="plan">'. esc_attr( $plan_meta['plan_title'] ).'</li>';
}
if(!empty($plan_meta['plan_currency'])){
    $output .= '<li class="price"> <span class="currency-icon">'. esc_attr( $plan_meta['plan_currency']).'</span>';
}
if(!empty($plan_meta['package_price'])){
	$output .= esc_attr( $plan_meta['package_price']);
}
if(!empty($plan_meta['package_price'])){
	$output .='<span class="month">/'.esc_attr( $plan_meta['pricing_per'] ).'</span> </li>';
}

if(!empty($plan_meta['tcpt_features'])){
    $features = explode(',',$plan_meta['tcpt_features']);
    $features = array_map('trim', $features);
    foreach($features as $feature) {
      	if(!empty($feature)){
       		$output .='<li>'.$feature .'</li>';
      	}
   	}
}

if (!$is_purchase) {
	$output .= '<li class="sign-up"><form action="" method="POST"><script
		src="https://checkout.stripe.com/checkout.js" class="stripe-button"
		data-key="'.$stripe['publishable'].'"
		data-amount="'.$package_price.'"
		data-name="Daily Lawtime"
		data-description=""
		data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
		data-email="'.$user->user_email.'"
		data-allow-remember-me=false
		data-locale="auto">
		</script></form>';
}else{
	$output .= '<li class="sign-up"><form action="" method="POST"><span class="btn btn-success">Thank you for purchase</span></form>';
}
$output .= '</li></ul></div></div>'; //  // end of the wraper
$output .= '<div style="clear:both;"></div>';
echo $output;
get_footer(); ?>