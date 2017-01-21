<aside class="col-lg-3 col-md-4 col-sm-12">
<div id="sidebar">
	<?php /* Hoem Ad #2 */
			if( get_option('hires_ad_300_250_enable') == 'on'){
				echo '<div class="ads">';
				echo get_option('hires_ad_300_250_code');
				echo "</div>"; 
			} ?>
	<?php if ( is_active_sidebar( 'right-sidebar-homepage' ) ) : ?>
				<?php dynamic_sidebar( 'right-sidebar-homepage'); ?>
			<?php endif; ?>
	<div class="widget popular">
	<h3 class="widget-title">Popular Posts</h3>
	<ul>
		<?php 
			query_posts('orderby=comment_count&posts_per_page=4');
			while(have_posts()) : the_post();
		?>
		<li itemscope itemtype="http://schema.org/Article">
			<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( '%s', 'hiresponsive' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_post_thumbnail('slide-thumb', array('class' => 'theme-thumb')); ?></a>
			<h4 class="entry-title">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark">
			<?php the_title(); ?></a></h4>
			<span class="entry-meta"><?php the_time(get_option('date_format')); ?></span>
			<div itemprop="description" class="entry-summary"><?php echo wp_trim_words( get_the_content(), 15 ) ?></div>
					
		</li>
		<?php endwhile; wp_reset_query(); ?>
	</ul>
	</div>
</div> <!--end #sidebar-->
</aside>