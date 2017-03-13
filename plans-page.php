<?php
/**
* Template Name: Plans Page
*/
?>
<?php get_header(); ?>
<section id="features">
	<!-- <h1><b>PRICING</b></h1> -->
	<div class="wrapper cf free_text_search_result">
		<?php 
		$args = array(
			'post_type' 	=> 'tcpricingtable',
			// 'orderby'  		=> 'date',
			// 'order'    		=> 'DESC'
			'post_status' 	=> 'publish',
			'order' => 'ASC',
	        'orderby' => 'meta_value',
	        'meta_query' => array(
	            array('key' => '_tc_tablemeta')
	        )
		);
		$query = new WP_Query( $args );
		if ( $query->have_posts() ) {
			$all_plans = array();
			$plan_meta = [];
			while ( $query->have_posts() ) {
				$query->the_post(); 
				$plans = get_post_meta(get_the_ID() , '_tc_tablemeta', true );
				$plans[0]['ID'] = get_the_ID();
				$all_plans = array_merge($all_plans, $plans);
				$plan_meta = array_merge($plan_meta, array_map('trim',explode(',',$plans[0]['tcpt_features'])) );
			}
			?>
			<table class="table">
				<thead>
					<th style="width: 250px; font-size: 25px;">Chose your plan</th>
					<?php foreach ($all_plans as $plan) {
						echo '<th style="text-align: center;color:' . $plan['plan_h_color'] . '; background-color:'. $plan['plan_hbg_color'] . ';">'. esc_attr( $plan['plan_title'] ).'</th>';
					}?>
				</thead>
				<tbody>
					<tr>
						<td>Price per month</td>
						<?php foreach ($all_plans as $plan) {
							$text = 'Free';
							if (intval(esc_attr( $plan['package_price']))) {
								$text = esc_attr( $plan['plan_currency']).' '.esc_attr( $plan['package_price']);
							}
							echo '<td style="text-align: center;color:' . $plan['plan_h_color'] . '; background-color:'. $plan['plan_hbg_color'] . ';">'. $text .'</td>';
						}?>
					</tr>
					<?php foreach (array_unique(array_diff($plan_meta, array('')), SORT_STRING ) as $key => $value): ?>
						<tr>
							<td>
								<?php echo $value; ?>
							</td>
							<?php foreach ($all_plans as $plan) {
								$icon = '<i class="fa fa-times-circle" aria-hidden="true"></i>';
								if ( strpos( $plan['tcpt_features'], trim($value)) > -1 ) {
									$icon = '<i class="fa fa-check" aria-hidden="true"></i>';
									
								}
								echo '<td style="text-align: center;color:' . $plan['plan_h_color'] . '; background-color:'. $plan['plan_hbg_color'] . ';">'.$icon.'</td>';
							}?>
						</tr>
					<?php endforeach ?>
					<tr>
						<td>Register now</td>
						<?php foreach ($all_plans as $plan) {
							echo '<td style="text-align: center;color:' . $plan['plan_h_color'] . '; background-color:'. $plan['plan_hbg_color'] . ';"><form action="/registration" method="POST"> <button style="color:#fff; background-color: #4a5c6b;";" class="btn btn-action" type="submit" name="plan_id" value="'.$plan['ID'].'">'.esc_attr( $plan['action_button'] ).'</button></form></td>';
						}?>
					</tr>
				</tbody>
			</table>
			<?php
			// print_r( );
		} 
		?>
	</div>
</section>

<?php get_footer(); ?>