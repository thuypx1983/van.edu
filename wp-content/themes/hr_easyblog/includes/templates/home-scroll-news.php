<div id="carousel" class="es-carousel-wrapper">
	<div class="es-carousel">
	<ul>
		<?php 
			query_posts('showposts=8');
			while(have_posts()) : the_post();
		?>
		<li><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail', array('class' => 'product-thumb', 'itemprop' => 'image')); ?>
		<h4 class="entry-title" itemprop="name"><?php the_title(); ?></h4></a>
		</li>
		<?php endwhile; wp_reset_query(); ?>					
	</ul>
	</div>
</div>
<script type="text/javascript">
	$('#carousel').elastislide({
		imageW: 202,
		margin: 15,
		minItems: 1
	});
</script>