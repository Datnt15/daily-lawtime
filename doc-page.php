<?php
/**
* Template Name: Detail Document
*/
get_header(); ?>
<style type="text/css">
	.post p {
	    margin-bottom: 0px;
	    margin-top: 0px;
	}
</style>

<div id="blog-wrapper" class="free_text_search_result">
	<div class="post">
		<div class="post-info">
	<?php //echo do_shortcode('[report_step]'); ?>
	<?php if (is_user_logged_in() && isset($_GET['file']) && isset($_GET['type'])) :?>
	<?php 
		$servername = "localhost";
		$username 	= "daily_admin";
		$password 	= "lamthon123";
		$dbname 	= "dailylawtime";
		// Create connection
		@$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
			echo "Data is empty by now\r\n" ;
		}
		$sql = '';
		switch ( $_GET['type'] ) {
			case 'law':
				$sql = "SELECT * FROM law_table WHERE FileName='" . $_GET['file'] ."'";
				break;
			
			case 'circular':
				$sql = "SELECT * FROM circular WHERE cid='" . $_GET['file'] ."'";
				break;
			
			case 'act':
				$sql = "SELECT * FROM act WHERE aid='" . $_GET['file'] ."'";
				break;
			
			case 'rule':
				$sql = "SELECT * FROM rule WHERE rid='" . $_GET['file'] ."'";
				break;
			
			case 'trade':
				$sql = "SELECT * FROM trade WHERE tid='" . $_GET['file'] ."'";
				break;
			
			case 'policy':
				$sql = "SELECT * FROM policy WHERE p_id='" . $_GET['file'] ."'";
				break;
			
			case 'noti':
				$sql = "SELECT * FROM notification WHERE nid='" . $_GET['file'] ."'";
				break;
			
			case 'regulation':
				$sql = "SELECT * FROM regulation WHERE reguId='" . $_GET['file'] ."'";
				break;
		}
		@$res = $conn->query($sql);
		if ($res !== false && $res->num_rows > 0) {
			while ($doc = $res->fetch_assoc()) :?>
				<article class="tempo-article classic format-standard hentry ">
					<h2 class="tempo-title">
						
						<?php if (isset( $doc['aid'] )) : ?>
							<?= $doc['Subject'] ?>
						<?php elseif (isset( $doc['id'] )): ?>
							<?= $doc['Title'] ?>
						<?php elseif(isset($doc['rid'])):?>
							<?= $doc['Subject'] ?>
						<?php elseif(isset($doc['fid'])):?>
							<?= $doc['FORMNUM'] ?>
						<?php elseif(isset($doc['tid'])):?>
							<?= $doc['subject'] ?>
						<?php elseif(isset($doc['nid'])):?>
							<?= $doc['subject'] ?>
						<?php elseif(isset($doc['cid'])):?>
							<?= $doc['subject'] ?>
						<?php elseif(isset($doc['p_id'])):?>
							<?= $doc['policy'] ?>
						<?php elseif(isset($doc['reguId'])):?>
							<?= $doc['SUBJECT'] ?>
						<?php endif;?>
					</h2>
					<?php if (isset($doc['FileName'])):?>
					<div>
						<p>
							<strong>Equivalent Citation: </strong>
							<?php echo $doc['EquivalentCitation']; ?>
						</p>
						<p>
							<strong>JUDGE: </strong>
							<?php echo $doc['JUDGE']; ?>
						</p>
						<p>
							<strong>Case No: </strong>
							<?php echo $doc['CaseNo']; ?>
						</p>
						<p>
							<strong>Petitioner: </strong>
							<?php echo $doc['Petitioner']; ?>
						</p>
						<p>
							<strong>Respondent: </strong>
							<?php echo $doc['Respondent']; ?>
						</p>
						<p>
							<strong>State: </strong>
							<?php echo $doc['state']; ?>
						</p>
						<p>
							<strong>Catch Note: </strong>
							<?php echo $doc['catchnote']; ?>
						</p>
						<p>
							<strong>Party: </strong>
							<?php echo $doc['Advocate']; ?>
						</p>
					</div>
					<?php else: ?>
						<?php if (!isset($doc['reguId'])) : ?>
							<div class="tempo-meta top">
								<?php if (isset($doc['fid'])):?>
									<a href="<?= $doc['FILENAME'] ?>" title="posted">
								    	<?= $doc['FILENAME'] ?>
								    </a>
								<?php else:?>
								    Posted on 
								    
								    <?php if (isset($doc['SectionNo'])): ?>
								    	<a href="" title="posted">
									    	<?= $doc['SectionNo'] ?>
									    </a>
								    <?php elseif (isset($doc['tid'])): ?>
								    	<i class="tempo-icon-clock-1"></i> 
									    <a href="" title="posted on <?= $doc['date'];  ?>">
									    	<time datetime="<?= $doc['date'];  ?>">
									    		<?= $doc['date'];  ?>
									    	</time>
									    </a>
								    <?php elseif (isset($doc['cid'])): ?>
								    	<i class="tempo-icon-clock-1"></i> 
									    <a href="" title="posted on <?= $doc['date_of_issue'];  ?>">
									    	<time datetime="<?= $doc['date_of_issue'];  ?>">
									    		<?= $doc['date_of_issue'];  ?>
									    	</time>
									    </a>
									    NO 
									    <a href=""><?= $doc['circular_no']; ?> </a>
								    <?php elseif (isset($doc['nid'])): ?>
								    	<i class="tempo-icon-clock-1"></i> 
									    <a href="" title="posted on <?= $doc['date'];  ?>">
									    	<time datetime="<?= $doc['date'];  ?>">
									    		<?= $doc['date'];  ?>
									    	</time>
									    </a>
									    NO 
									    <a href=""><?= $doc['noti_no']; ?> </a>
								    <?php endif; ?>
							    <?php endif; ?>
							</div>
					    <?php endif; ?>
				    <?php endif; ?>

					<div class="tempo-hentry">
					    <?php
					    	if (isset($doc['Detail']))
					    		echo strip_tags(html_entity_decode($doc['Detail']));
					    	elseif (isset($doc['fid']))
					    	 	echo html_entity_decode($doc['DESCRIPTION']);
					    	 elseif (isset($doc['tid']) || isset($doc['cid']) || isset($doc['nid']))
					    	 	echo strip_tags(html_entity_decode($doc['detail']));
					    	 elseif (isset($doc['reguId']))
					    	 	echo strip_tags(html_entity_decode($doc['DETAILs']));
					    	 elseif (isset($doc['p_id']))
					    	 	echo strip_tags(html_entity_decode($doc['RTFdetail']));

					    	// Last Reference
					    	if (isset($doc['BackwardReference'])) {
					    		$sql = "SELECT * FROM law_table WHERE FileName='" . $doc['BackwardReference'] ."'";
					    		@$res = $conn->query($sql);
								if ($res !== false && $res->num_rows > 0) {
									$doc = $res->fetch_assoc();?>
									<a href="<?= base_url; ?>/doc/?type=law&file=<?= $doc['FileName'] ?>" title="Headers Post" class="button-primary">Backward Reference</a>
									<?php
								}
					    	}

					    	// Next Reference
					    	if (isset($doc['ForwardReference'])) {
					    		$sql = "SELECT * FROM law_table WHERE FileName='" . $doc['ForwardReference'] ."'";
					    		@$res = $conn->query($sql);
								if ($res !== false && $res->num_rows > 0) {
									$doc = $res->fetch_assoc();?>
									<a href="<?= base_url; ?>/doc/?type=law&file=<?= $doc['FileName'] ?>" title="Headers Post" class="button-primary">Forward Reference</a>
									<?php
								}
					    	}
					    ?>

					</div>
					
				</article>
			<?php endwhile;?>			
		<?php	
		} else {
			echo "<h2>Nothing founds</h2>";
		} 
	 ?>
		
	<?php else:?>
		<h3 class="text-center">You need to login this site to read this document or</h3>
		<form action="<?= home_url('/registration/'); ?>" method="POST" class="text-center">
			<input type="hidden" name="doc_url" value="<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">
			<input type="submit" class="button-primary" value="Register">
		</form>

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

	endif; ?>
			
		</div>
	</div>
</div>

</div>

<?php get_footer(); ?>