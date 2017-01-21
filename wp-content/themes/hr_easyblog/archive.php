<?php get_header(); ?>
<div class="row">
<div class="col-lg-9 col-md-8" id="content">
<div class="row">
		<?php echo '<div class="col-md-12">';
			include(TEMPLATEPATH. '/includes/templates/heading.php');
			echo '</div>';
				rewind_posts();
				if (have_posts()) {
					while (have_posts()) : the_post();
					global $post;
						
					include(TEMPLATEPATH. '/includes/templates/post-loop.php');
				
					$postcount++;
					endwhile;
				} else {
					include(TEMPLATEPATH. '/includes/not-found.php');
				}
				if ( $wp_query->max_num_pages > 1 ) hr_pagenavi();
			
		?>
</div>
</div>
<?php get_sidebar();?>
</div>
</div>
<?php get_footer(); ?>