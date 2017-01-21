<div class="col-lg-3 sidebar-left">
	<?php if ( is_active_sidebar( 'sidebar-left' ) ) : ?>
		<?php dynamic_sidebar( 'sidebar-left'); ?>
	<?php endif; ?>
	<?php /* Home Ad #1 */
		if( get_option('hires_ad_160_600_enable') == 'on'){
		echo '<div class="widget visible-lg">';
		echo get_option('hires_ad_160_600_code');
		echo '</div>';
	} ?>
</div>