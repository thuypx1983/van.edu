<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<?php include(TEMPLATEPATH. '/includes/templates/sidebar-left.php'); ?>

<div id="content-wrap">

	<div id="content">
	
		<?php the_post(); ?>
		
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
			<h1 class="entry-title"><?php the_title(); ?></h1>
			
			<div class="entry">
			
				<h3>
					<?php $numposts = $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->posts WHERE post_status = 'publish'");
					if (0 < $numposts) $numposts = number_format($numposts); ?>
					<?php echo $numposts.' recipes published since we online:'; ?>
				</h3>
				<ul>
					<?php
					$myposts = get_posts('numberposts=-1&');
					foreach($myposts as $post) : ?>
					<li><?php the_time('m/d/y') ?>: <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					<?php endforeach; ?>
				</ul>
				
				<h3><?php _e('Categories', 'hiresponsive'); ?>:</h3>
				<ul>
					<?php wp_list_categories('title_li='); ?>
				</ul>
				
				<h3><?php _e('Monthly Archive', 'hiresponsive'); ?>:</h3>
				<ul>
					<?php wp_get_archives('type=monthly'); ?>
				</ul>
			
			</div> <!--end .entry-->
		
		</div> <!--end #post-->
	
	</div> <!--end #content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>