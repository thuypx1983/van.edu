<?php $post = $posts[0]; ?>
<div class="heading">
<h1>
<?php if (is_category()) : ?>
<?php printf( __('%s', 'hiresponsive' ), get_cat_name($cat) ); ?>

<span class="single-cat-feed catbox-feed"><a href="<?php echo get_category_feed_link($cat, ''); ?>" title="<?php printf(__('Subscribe to %s','hiresponsive'),get_cat_name($cat)); ?>"><i class="fa fa-rss"></i></a></span>

<?php elseif( is_tag() ) : ?>	
	<?php printf( __( '<span>%s</span>', 'hiresponsive' ), single_tag_title('',false)); ?>		
	
<?php elseif ( is_search() ) : ?>
	<?php printf( __( 'Search for <span>%s</span>', 'hiresponsive' ), $s ); ?>	
			
<?php elseif ( is_day() ) : ?>
	<?php printf( __( 'Daily Archives: <span>%s</span>', 'hiresponsive' ), get_the_time() ); ?>
				
<?php elseif ( is_month() ) : ?>
	<?php printf( __( 'Monthly Archives: <span>%s</span>', 'hiresponsive' ), get_the_time('F Y') ); ?>	
			
<?php elseif ( is_year() ) : ?>
	<?php printf( __( 'Yearly Archives: <span>%s</span>', 'hiresponsive' ), get_the_time('Y') ); ?>	
			
<?php elseif (is_author()) : ?>	
	<?php if(get_query_var('author_name')) : $curauth = get_userdatabylogin(get_query_var('author_name')); else : $curauth = get_userdata(get_query_var('author'));	endif; ?>				
	<?php printf( __( '<span>%s</span>', 'hiresponsive' ), $curauth->display_name); ?>	
			
<?php elseif (is_home() && get_query_var('paged') > 0) : ?>
	<?php printf( __( 'Archive: <span>Page %s</span>', 'hiresponsive' ), $paged ); ?>
	
<?php endif; ?>			
</h1>
<?php if (is_category() || is_tag()) : ?>
<div class="notebox"><p><?php echo category_description(); ?></p></div>
<?php endif;?>
</div><!--end .heading-->