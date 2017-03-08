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
				if( $has_header ) :?>
					<img src="<?php header_image(); ?>" alt="" class="lawyeria-lite-header-image" />
				<?php endif; ?>
			</div>	
			
			<div id="subheader" style="background-image: url('<?php
				if ( get_theme_mod( 'lawyeria_lite_frontpage_subheader_bg', get_template_directory_uri() . "/images/full-header.jpg" ) ) {
				    echo get_theme_mod( 'lawyeria_lite_frontpage_subheader_bg',get_template_directory_uri() . "/images/full-header.jpg" );
			     }
			 ?>');">
				<div class="subheader-color cf">
					<div class="wrapper cf">
						<div class="full-header-content full-header-content-no-sidebar">
							<div class="col-xs-8 col-xs-offset-2">
				                <div class="input-group">
				                    <input type="text" class="form-control input-search-header" name="" id="key" placeholder="Search">
				                    <span class="input-group-btn">
				                        <button class="btn btn-default btn-radius0 law-search" type="button">
				                            <span class="glyphicon glyphicon-search"></span>
				                        </button>
				                    </span>
				                </div>
				            </div>
						</div><!--/div .header-content-->
					</div><!--/div .wrapper-->
				</div><!--/div .full-header-color-->
				<div class="second-subheader">
					<div class="wrapper">
						<h3><?php the_title( ); ?> </h3>
						<?php if ($_SESSION['isset_message']) { ?>
							<div class="alert alert-<?php echo $_SESSION['message_type']; ?> alert-dismissible" role="alert">
							  	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							  	<?php echo $_SESSION['flass_message']; ?>
							</div>
						<?php } ?>
					</div><!--/div .wrapper-->
				</div><!--/div .second-subheader-->
			</div><!--/div #subheader-->
		</header><!--/header-->
			
		<style type="text/css">
			body {
		    	background: #f3f3f3;
			}
			.smform-control{
				height: auto;
			}
			.button-primary {
			    border-radius: 0 !important;
			    background: #0085ba !important;
			    color: white !important;
			    padding: 10px 20px;
			    border: 1px solid #ccc;
			    cursor: pointer;
			}
		</style>
		<?php if (!is_user_logged_in()) : ?>

            <!-- Modal -->
            <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title text-left" id="loginModalLabel">Login</h4>
                        </div>
                        <div class="modal-body text-left">
                            <?php 
                            $args = array(
                                'echo'           => true,
                                'remember'       => true,
                                'redirect'       => ( is_ssl() ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
                                'form_id'        => 'loginform',
                                'id_username'    => 'user_login',
                                'id_password'    => 'user_pass',
                                'id_remember'    => 'rememberme',
                                'id_submit'      => 'wp-submit',
                                'label_username' => __( 'Username' ),
                                'label_password' => __( 'Password' ),
                                'label_remember' => __( 'Remember Me' ),
                                'label_log_in'   => __( 'Log In' ),
                                'value_username' => '',
                                'value_remember' => false
                            );
                            wp_login_form( $args );
                             ?>
                        </div>
                        <div class="modal-footer"></div>
                    </div>
                </div>
            </div>
        <?php endif;