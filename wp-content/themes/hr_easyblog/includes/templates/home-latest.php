<div id="lastest-post">
	<ul>
		<?php 
			query_posts('showposts='.get_option('hires_latest_post_num'));
			while(have_posts()) : the_post();
		?>
		<li class="hentry clear" itemscope itemtype="http://schema.org/Article">
			<a title="<?php the_title();?>" href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail('thumbnail', array('itemprop'=>'image')); ?></a>
			<h4 class="entry-title" itemprop="name"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( '%s', 'hiresponsive' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h4>
			<div class="entry-meta">				
				<i class="fa fa-calendar"></i> <span itemprop="dateCreated" class="meta-date updated" datetime="<?php the_time('c') ?>"><?php the_time(get_option('date_format')); ?></span> <i class="fa fa-user"></i> <span class="vcard author"><span itemprop="author" class="fn"><?php the_author(); ?></span></span>
			</div>
			<meta itemprop="url" content="<?php the_permalink(); ?>"/>
		</li>
		<?php endwhile; wp_reset_query(); ?>
	</ul>
</div>