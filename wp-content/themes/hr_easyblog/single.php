<?php get_header(); ?>
<?php the_post(); ?>
<div class="row">
<div class="col-lg-9 col-md-8" id="content">
		<div class="heading">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<p class="entry-meta"><?php the_time(get_option('date_format')); ?> -  Category: <?php the_category(', ')?> - Author: <?php the_author()?></p>
		</div>
		
		
		<div class="entry entry-content">
				<?php if(get_option('hires_integrate_singletop_enable') == 'on') echo (get_option('hires_integration_single_top')); ?>
				<?php the_content(); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'hiresponsive' ), 'after' => '</div>' ) ); ?>
			
				<?php if(get_option('hires_integrate_singlebottom_enable') == 'on') echo (get_option('hires_integration_single_bottom')); ?>


			
		</div> <!--end .entry-->
		

	<div class="clear"></div>
	<div class="single-share">
		<?php printf(the_tags(__('<div class="entry-tags"><span class="btn-share"><strong>Tags:</strong></span>&nbsp;'),', ','</div><div class="clear"></div>')); ?>
		<?php if( get_option('hires_enable_share_buttons') == 'on' ) { ?>
						
							<div class="btn-share"><strong>Share this Post :</strong></div>
							
							<div class="btn-like">
							<iframe src="http://www.facebook.com/plugins/like.php?locale=en_US&amp;href=<?php the_permalink(); ?>&amp;layout=button_count&amp;show_faces=false&amp;width=100&amp;action=like&amp;font=arial&amp;colorscheme=light" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px;" allowTransparency="true"></iframe>
							</div><!-- .btn-like -->
							<div class="btn-tweet">
							    <a href="http://twitter.com/share" class="twitter-share-button"
							    data-url="<?php the_permalink(); ?>"
							    data-via="<?php echo get_option('responsive_twitter_id'); ?>"
							    data-text="<?php the_title(); ?>"
							    data-related=""
							    data-count="horizontal">Tweet</a>
							</div><!-- .btn-tweet -->
							<div class="btn-plus">
								<g:plusone size="medium" href="<?php the_permalink();?>"></g:plusone>
							</div><!-- .btn-plus -->	
	<?php } ?>
	</div><!-- .single-share -->

<!--Likefanpage-->
<strong> LIKE VĂN MẪU TRÊN FACEBOOK ĐỂ THEO DÕI CÁC BÀI VĂN NHÉ!</strong>

	<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fhocviet.edu.vn%2F&tabs=timeline&width=500&height=70&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=598728486914144" width="500" height="70" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

<!--Comment FB-->
<div class="fb-comments" data-href="<?php echo get_permalink(); ?>" data-width="900" data-numposts="6" data-colorscheme="light"></div>
<!--Comment FB-->
<?php wp_related_posts()?>
	<div class="clear"></div>
	<div class="ads-content">
		<?php /* Content 336x280 */
			if( get_option('hires_ad_336_280_enable') == 'on'){
				echo get_option('hires_ad_336_280_code');
		} ?>
		<?php /* Content 336x280 */
			if( get_option('hires_ad_336_280_enable') == 'on'){
				echo get_option('hires_ad_336_280_code');
		} ?>
	</div>
	<div class="clear"></div>
		<?php if(get_option('hires_show_post_comments') == 'on') comments_template( '', true ); ?>
</div>
<?php get_sidebar();?>
</div>
</div>
<?php get_footer(); ?>