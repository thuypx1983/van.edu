<?php get_header(); ?>
	<div class="row">
	<div class="col-lg-9 col-md-8">
		<?php if(get_option('hires_featured_slider_enable') == 'on' || get_option('hires_latest_news_enable') == 'on'):?>
		<div class="row">
			<div class="col-xs-12 col-sm-7 col-lg-7 col-module">
				<?php if(get_option('hires_featured_slider_enable') == 'on') include(TEMPLATEPATH. '/includes/templates/home-slider.php'); ?>
			</div>
			<div class="col-xs-12 col-sm-5 col-lg-5 col-module">
				<?php if(get_option('hires_latest_news_enable') == 'on') include(TEMPLATEPATH. '/includes/templates/home-latest.php'); ?>
			</div>
		</div>
		<?php endif;?>
			<?php /* Home Ad #1 */
			if( get_option('hires_ad_728_90_enable') == 'on'){
				echo '<div class="row hidden-xs"><div class="col-md-12"><div class="ads-home-midle">';
				echo get_option('hires_ad_728_90_code');
				echo "</div></div></div>"; 
			} ?>
			<div class="row">
			<div class="col-lg-9">
			<div class="row">
				<?php 
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$wp_query = new WP_Query('posts_per_page='.get_theme_mod('home_postnum').'&paged=' . $paged);
				if (have_posts()) {
					while (have_posts()) : the_post();
						global $post;
						include(TEMPLATEPATH. '/includes/templates/post-loop.php');
					endwhile;
				} else { 
					include(TEMPLATEPATH. '/includes/not-found.php'); 
				}
				
				if ( $wp_query->max_num_pages > 1 ) hr_pagenavi();
				wp_reset_query();
			?>
			
			</div>
			</div>
			<?php include(TEMPLATEPATH. '/includes/templates/sidebar-left.php')?>
			</div>
			<?php /* Hoem Ad #2 */
			if( get_option('hires_ad_728_90_enable') == 'on'){
				echo '<div class="row hidden-xs"><div class="col-md-12"><div class="ads-home-midle">';
				echo get_option('hires_ad_728_90_code');
				echo "</div></div></div>"; 
			} ?>
			
	</div>
	<?php include(TEMPLATEPATH. '/includes/templates/home-sidebar-right.php'); ?>
	
	</div>
	</div>

<?php get_footer(); ?>