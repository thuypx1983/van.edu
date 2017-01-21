<?php get_header(); ?>
<?php the_post(); ?>
<div class="row">
<div class="col-lg-12" id="content">
	<div class="heading">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</div>


<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry entry-content">
				<?php if(get_option('hires_integrate_singletop_enable') == 'on') echo (get_option('hires_integration_single_top')); ?>
				<?php the_content(); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'hiresponsive' ), 'after' => '</div>' ) ); ?>
			
				<?php if(get_option('hires_integrate_singlebottom_enable') == 'on') echo (get_option('hires_integration_single_bottom')); ?>
			
		</div> <!--end .entry-->
		
	</div> <!--end #post-->
</div>
</div>
</div>
<?php get_footer(); ?>
