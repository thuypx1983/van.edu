<div id="featured-slider">
    <div class="flexslider loading">
		<ul class="slides">
		<?php 
				query_posts( array(
					'showposts' => get_option('hires_featured_post_num'),
					'tag' => get_option('hires_featured_post_tags')
				) );
				if( have_posts() ) : while( have_posts() ) : the_post();
			?>	
		      
	        <li itemscope itemtype="http://schema.org/Article">
	        <article class="hentry">
	            <a title="<?php the_title();?>" href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail('slide-thumb', array('class' => 'img-responsive', 'itemprop'=>'image')); ?></a>
	            <span class="entry-date">
					<span class="entry-month"><?php the_time('M'); ?></span>
					<span class="entry-day"><?php the_time('d'); ?></span>
				</span><!-- .entry-date -->
				<div class="description">    
	    	    <h2 itemprop="name" class="flex-caption entry-title">
	    	    	<a title="<?php the_title();?>" href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
	    	    </h2><!-- .flex-caption .entry-title -->
	    	    <div itemprop="description" class="entry-summary"><?php hr_content_limit('160'); ?></div>
		    	
		    	</div>
				<meta itemprop="url" content="<?php the_permalink(); ?>"/>
			</article>
		    </li>
		
		<?php endwhile; ?>
		<?php else : ?>
		<?php endif; ?>
		</ul><!-- .slides -->
    </div><!-- .flexslider -->
</div><!-- #featured-slider -->
<?php wp_reset_query();?>