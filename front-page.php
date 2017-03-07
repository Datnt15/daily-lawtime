		<?php
		/**
		 *  The template for displaying Front Page.
		 *
		 *  @package lawyeria-lite
		 */
		get_header();
		if ( get_option( 'show_on_front' ) == 'page' ){?>
  			
		<section id="content">
			<div class="wrapper cf">
				<div id="posts">
					<?php
						if ( have_posts() ) : while ( have_posts() ) : the_post();
						
					?>
					<div class="post">
						
						<div class="post-excerpt">
							<?php the_content(); ?>
						</div><!--/div .post-excerpt-->
												
						
					</div><!--/div .post-->
					<?php endwhile; else: ?>
                    	<p><?php _e('Sorry, no posts matched your criteria.', 'lawyeria-lite'); ?></p>
                	<?php endif; ?>
				</div><!--/div #posts-->
				<?php get_sidebar(); ?>
			</div><!--/div .wrapper-->
		</section><!--/section #content-->
<?php } else { ?>
			
		<section id="features">
			<div class="wrapper cf">
				<div class="features-box">
					
						<?php
							/*if ( get_theme_mod( 'lawyeria_lite_frontpage_firstlybox_icon',get_template_directory_uri().'/images/features-box-icon-one.png' ) ) { 
							
								echo '<div class="features-box-icon">';
							
									echo '<img src="'.get_theme_mod( 'lawyeria_lite_frontpage_firstlybox_icon', get_template_directory_uri().'/images/features-box-icon-one.png' ).'" alt="'.get_theme_mod( 'lawyeria_lite_frontpage_firstlybox_title' ).'" title="'.get_theme_mod( 'lawyeria_lite_frontpage_firstlybox_title' ).'" />';
									
								echo '</div>';
							}*/
							echo '<div >';
							echo do_shortcode( '[tc-pricing-table tableid="33"]' );
							echo '</div>';
							if ( get_theme_mod( 'lawyeria_lite_frontpage_firstlybox_title','Lorem' ) ) {
							
								echo '<h4>';
								
									echo get_theme_mod( 'lawyeria_lite_frontpage_firstlybox_title','Lorem' );
									
								echo '</h4>';	
							}
							
							if ( get_theme_mod( 'lawyeria_lite_frontpage_firstlybox_content','Go to Appearance - Customize, to add content.' ) ) {
							
								echo '<p>';
								
									echo get_theme_mod( 'lawyeria_lite_frontpage_firstlybox_content','Go to Appearance - Customize, to add content.' );
									
								echo '</p>';	
							}
						?>
				</div><!--/div .features-box-->
				<div class="features-box">
					
						<?php
							/*if ( get_theme_mod( 'lawyeria_lite_frontpage_secondlybox_icon', get_template_directory_uri().'/images/features-box-icon-two.png' ) ) {
							
								echo '<div class="features-box-icon">';
								
									echo '<img src="'.get_theme_mod( 'lawyeria_lite_frontpage_secondlybox_icon',get_template_directory_uri().'/images/features-box-icon-two.png' ).'" alt="'.get_theme_mod( 'lawyeria_lite_frontpage_secondlybox_title','Ipsum' ).'" title="'.get_theme_mod( 'lawyeria_lite_frontpage_secondlybox_title','Ipsum' ).'" />';
									
								echo '</div>';	
							} */
							echo '<div >';
							echo do_shortcode( '[tc-pricing-table tableid="31"]' );
							echo '</div>';
							if ( get_theme_mod( 'lawyeria_lite_frontpage_secondlybox_title','Ipsum' ) ) {
							
								echo '<h4>';
							
									echo get_theme_mod( 'lawyeria_lite_frontpage_secondlybox_title','Ipsum' );
									
								echo '</h4>';	
							}
					
							if ( get_theme_mod( 'lawyeria_lite_frontpage_secondlybox_content', 'Go to Appearance - Customize, to add content.' ) ) {
							
								echo '<p>';
							
									echo get_theme_mod( 'lawyeria_lite_frontpage_secondlybox_content', 'Go to Appearance - Customize, to add content.' );
									
								echo '</p>';	
							}
						?>
				
				</div><!--/div .features-box-->
				<div class="features-box">
					
						<?php
							/*if ( get_theme_mod( 'lawyeria_lite_frontpage_thirdlybox_icon',get_template_directory_uri().'/images/features-box-three.png' ) ) { 
							
								echo '<div class="features-box-icon">';
								
									echo '<img src="'.get_theme_mod( 'lawyeria_lite_frontpage_thirdlybox_icon', get_template_directory_uri().'/images/features-box-three.png' ).'" alt="'.get_theme_mod( 'lawyeria_lite_frontpage_thirdlybox_title','Dolor' ).'" title="'.get_theme_mod( 'lawyeria_lite_frontpage_thirdlybox_title','Dolor' ).'" />';
								
								echo '</div>';
								
							}	*/
							echo '<div >';
							echo do_shortcode( '[tc-pricing-table tableid="32"]' );
							echo '</div>';
							if ( get_theme_mod( 'lawyeria_lite_frontpage_thirdlybox_title','Dolor' ) ) {
							
								echo '<h4>';
								
									echo get_theme_mod( 'lawyeria_lite_frontpage_thirdlybox_title','Dolor' );
									
								echo '</h4>';	
							}
						
							if ( get_theme_mod( 'lawyeria_lite_frontpage_thirdlybox_content','Go to Appearance - Customize, to add content.' ) ) {
							
								echo '<p>';
								
									echo get_theme_mod( 'lawyeria_lite_frontpage_thirdlybox_content','Go to Appearance - Customize, to add content.' );
									
								echo '</p>';	
							}
						?>
					
				</div><!--/div .features-box-->
			</div><!--/div .wrapper-->
		</section><!--/section #features-->
		<section id="content">
			<div class="wrapper">
				<div class="content-article cf" role="main">
					
						<?php
							if ( get_theme_mod( 'lawyeria_lite_frontpage_thecontent_image',get_template_directory_uri().'/images/content-article-image.png' )) {

								echo '<div class="content-article-image">';
								
									echo '<img src="'.get_theme_mod( 'lawyeria_lite_frontpage_thecontent_image',get_template_directory_uri().'/images/content-article-image.png' ).'" alt="'.get_theme_mod( 'lawyeria_lite_frontpage_thecontent_title','Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis.' ).'" title="'.get_theme_mod( 'lawyeria_lite_frontpage_thecontent_title','Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis.' ).'" />';
									
								echo '</div>';	
							
							}
					
							if ( get_theme_mod( 'lawyeria_lite_frontpage_thecontent_title','Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis.' ) ) {
							
								echo '<h3>';
								
									echo get_theme_mod( 'lawyeria_lite_frontpage_thecontent_title','Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis.' );
									
								echo '</h3>';	
							}

							if ( get_theme_mod( 'lawyeria_lite_frontpage_thecontent_content','Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.' ) ) {
							
								echo '<p>';
									echo get_theme_mod( 'lawyeria_lite_frontpage_thecontent_content','Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.' );
								echo '</p>';	
							}
						?>
					
				</div><!--/div .content-article .cf-->


			</div><!--/div .wrapper-->
		</section><!--/section #content-->

		<?php } get_footer(); ?>