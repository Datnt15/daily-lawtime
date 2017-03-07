<?php
/**
 *  The template for displaying Header.
 *
 *  @package lawyeria-lite
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta http-equiv="<?php echo get_template_directory_uri();?>/content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<meta charset="UTF-8">
		<title><?php wp_title('|', true, 'right'); ?></title>

		<!--[if lt IE 9]>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
		<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/ie.css" type="text/css">
		<![endif]-->	

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header>
			<div class="wide-header">
				<div class="wrapper cf">
					<div class="header-left cf">
						
                            <?php
                            if ( get_theme_mod( 'lawyeria_lite_header_logo', get_template_directory_uri() .'/images/header-logo.png' ) ) {
								echo '<a class="logo" href="'.home_url().'" title="'.esc_attr( get_bloginfo( 'name' ) ).'">';
									echo '<img src="'. get_theme_mod( 'lawyeria_lite_header_logo', get_template_directory_uri() .'/images/header-logo.png' ) .'" alt="'. get_bloginfo( 'name' ) .'" title="'. get_bloginfo( 'name' ) .'" />';
								echo '</a>';	
                            }
							else {

								echo '<h1 class="site-title">';
									echo '<a href="'.esc_url( home_url( '/' ) ).'" title="'.esc_attr( get_bloginfo( 'name' ) ).'" rel="home">'.get_bloginfo( 'name' ).'</a>';
								echo '</h1>';
								echo '<h2 class="site-description">'.get_bloginfo( 'description' ).'</h2>';
									

							}
                            ?>
					</div><!--/div .header-left .cf-->
					<div class="header-contact">
    					<?php
    						if ( get_theme_mod( 'lawyeria_lite_header_title','Contact us now' ) ) {
    							echo get_theme_mod( 'lawyeria_lite_header_title','Contact us now' );
    						}
    					?>
    					<br />
    					<span>
    						<?php
    							if ( get_theme_mod( 'lawyeria_lite_header_subtitle','+1-888-846-1732' )) { ?>
                                    <a href="tel: <?php echo get_theme_mod( 'lawyeria_lite_header_subtitle','+1-888-846-1732' ); ?>" title="<?php echo get_theme_mod( 'lawyeria_lite_header_subtitle','+1-888-846-1732' ); ?>"><?php echo get_theme_mod( 'lawyeria_lite_header_subtitle','+1-888-846-1732' ); ?></a>
    							<?php }
    						?>
    					</span><!--/span-->
					</div><!--/.header-contact-->
				</div><!--/div .wrapper-->
			</div><!--/div .wide-header-->
			<div class="wrapper cf">
			    <nav>
    				<div class="openresponsivemenu">
    					<?php _e('Open Menu','lawyeria-lite'); ?>
    				</div><!--/div .openresponsivemenu-->
    				<div class="container-menu cf">
        				<?php
        					wp_nav_menu(
        					    array(
        						        'theme_location' => 'header-menu',
        							)
        						);
        					?>
    				</div><!--/div .container-menu .cf-->
    			</nav><!--/nav .navigation-->
		    </div>
			<div class="wrapper">
			<?php 
					$has_header = get_header_image(); 
					if( $has_header ) :
					?>
						<img src="<?php header_image(); ?>" alt="" class="lawyeria-lite-header-image" />
				<?php endif; ?>
			</div>	
			<?php if ( get_option( 'show_on_front' ) == 'page' ){?>
  			<section class="wide-nav">
				<div class="wrapper">
					<h3>
						<?php the_title(); ?>
					</h3><!--/h3-->
				</div><!--/div .wrapper-->
			</section><!--/section .wide-nav-->
		</header><!--/header-->
		<?php } else { ?>
			<div id="subheader" style="background-image: url('<?php
				if ( get_theme_mod( 'lawyeria_lite_frontpage_subheader_bg', get_template_directory_uri() . "/images/full-header.jpg" ) ) {
				    echo get_theme_mod( 'lawyeria_lite_frontpage_subheader_bg',get_template_directory_uri() . "/images/full-header.jpg" );
			     }
			 ?>');">
				<div class="subheader-color cf">
					<div class="wrapper cf">
						<div class="full-header-content full-header-content-no-sidebar">
							
								<?php
									if ( get_theme_mod( 'lawyeria_lite_frontpage_header_title','Lorem ipsum dolor sit amet, consectetur adipscing elit.' ) ) {
										echo '<h3>';
										echo get_theme_mod( 'lawyeria_lite_frontpage_header_title','Lorem ipsum dolor sit amet, consectetur adipscing elit.' );
										echo '</h3>';
									}
								?>
							
								<?php
									if ( get_theme_mod( 'lawyeria_lite_frontpage_header_content','Ut fermentum aliquam neque, sit amet molestie orci porttitor sit amet. Mauris venenatis et tortor ut ultrices. Nam a neque venenatis, tristique lacus id, congue augue. In id tellus lacus. In porttitor sagittis tellus nec iaculis. Nunc sem odio, placerat a diam vel, varius.' )) {
										echo '<p>';
											echo get_theme_mod( 'lawyeria_lite_frontpage_header_content','Ut fermentum aliquam neque, sit amet molestie orci porttitor sit amet. Mauris venenatis et tortor ut ultrices. Nam a neque venenatis, tristique lacus id, congue augue. In id tellus lacus. In porttitor sagittis tellus nec iaculis. Nunc sem odio, placerat a diam vel, varius.' );
										echo '</p>';	
									}
								?>
						</div><!--/div .header-content-->
					</div><!--/div .wrapper-->
				</div><!--/div .full-header-color-->
				<div class="second-subheader">
					<div class="wrapper">
						<h3>
							<?php
								the_title( );
								// if ( get_theme_mod( 'lawyeria_lite_frontpage_subheader_title','Lorem Ipsum is simply dummy text of the printing and type setting industry.' ) ) {
								// 	echo get_theme_mod( 'lawyeria_lite_frontpage_subheader_title','Lorem Ipsum is simply dummy text of the printing and type setting industry.' );
								// }
							?>
						</h3><!--/h3-->
					</div><!--/div .wrapper-->
				</div><!--/div .second-subheader-->
			</div><!--/div #subheader-->
		</header><!--/header-->
		<?php } ?>
<style type="text/css">
	body {
    	background: #f3f3f3;
	}
	.smform-control{
		height: auto;
	}
</style>