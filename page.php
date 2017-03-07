<?php
/**
 *  The template for displaying Page.
 *
 *  @package lawyeria-lite
 */
get_header();
?>
<section id="content">
	<div class="wrapper cf free_text_search_result">
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
<?php get_footer(); ?>