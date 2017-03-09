<?php 

/*
Template name: Checkout Page
 */
// if (!is_user_logged_in()) {
// 	wp_safe_redirect( home_url() );
// }
get_header();?>
<?php 

require 'vendor/autoload.php';
$stripe = [
	'publishable' 	=> 'pk_test_pmx83P9d4qmgqIR87kV4e57G',
	'private' 		=> 'sk_test_6EXNH7gMr2obIrHyOXx6oRCB'
	];
$user_id = get_current_user_id();
$user = get_userdata( $user_id )->data;

if (isset($_POST['stripeToken'])) {
	$token = $_POST['stripeToken'];
	\Stripe\Stripe::setApiKey($stripe['private']);

	// Token is created using Stripe.js or Checkout!
	// Get the payment token submitted by the form:

	// Charge the user's card:
	$charge = \Stripe\Charge::create(array(
	  "amount" => 1000,
	  "currency" => "usd",
	  "description" => "Example charge",
	  "source" => $token,
	));
}
// var_dump($user);
?>
<form action="" method="POST">
	<script
	  src="https://checkout.stripe.com/checkout.js" class="stripe-button"
	  data-key="<?php echo $stripe['publishable'];?>"
	  data-amount="1000"
	  data-name="Daily Lawtime"
	  data-description=""
	  data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
	  data-email="<?php echo $user->user_email;?>"
	  data-locale="auto">
	</script>
</form>
<?php get_footer(); ?>