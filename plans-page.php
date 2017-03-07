<?php
/**
* Template Name: Plans Page
*/
?>
<?php get_header(); ?>
<section id="features">
	<!-- <h1><b>PRICING</b></h1> -->
	<div class="wrapper cf">
		<?php 
		$args = array(
			'post_type' => 'tcpricingtable',
			'orderby'  	=> 'date',
			'order'    	=> 'DESC'
		);
		$query = new WP_Query( $args );
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post(); ?>
				<div class="features-box">
					<?php echo do_shortcode( '[tc-pricing-table tableid="'.get_the_ID().'"]' );?>
				</div>		
			<?php
			}
			
		} 
		?>
	</div>
</section>

<?php get_footer(); ?>