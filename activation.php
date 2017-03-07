<?php
/*
Template Name: Activate Account
*/
?>

<?php get_header(); ?>
<?php
	$uid = $_GET['uid'];
	$secret_code = $_GET['secret_code'];
	if (get_user_meta($uid, 'secret-code', true) === $secret_code ){
		update_user_meta( $uid, 'state', 'active' );
	}
	
	?>
	<h3>Your account is activated. You will be redirected to <a href="<?= home_url(); ?>">Home page</a> </h3>
	<?php
	
	wp_redirect( home_url(), 302 ); //exit;
get_footer(); ?>