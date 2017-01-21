<article id="theme-<?php the_ID(); ?>" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 blog-item hentry">
	<div class="row" itemscope itemtype="http://schema.org/Article">
	<div class="col-lg-4 col-md-4 col-sm-4">
	<div class="thumb-pad1">
		<div class="thumbnail">
			<figure><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('slide-thumb', array('class' => 'entry-thumb',itemprop=>'image')); ?></a></figure>
		</div>
	</div>
	</div>
	<div class="col-lg-8 col-md-8 col-sm-8">
		<h4 itemprop="name"><a href="<?php the_permalink(); ?>" itemprop="url"><?php the_title(); ?></a></h4>
		<span class="entry-meta"><?php the_time(get_option('date_format')); ?> -  Category: <?php the_category(', ')?> - Author: <?php the_author()?></span>
		<p class="entry-summary" itemprop="description"><?php hr_content_limit(160)?></p>
	</div>
	</div>
</article>