<a href="<?php the_permalink(); ?>">
<article class="pl-4 pr-4 mb-4 md:flex">

	<?php if (has_post_thumbnail( $post->ID ) ) { ?>
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
	<div class="md:w-3/5"><img src="<?php echo $image[0]; ?>" class="w-full" loading="lazy" width="320" height="180" alt="" /></div>
	<?php } ?>
	<div class="md:w-2/5 bg-white p-4">
	<h1 class="text-2xl leading-tight"><?php the_title( '', '' ); ?></h1>
	<time class="block mb-2 text-sm text-gray-600" datetime="2019-01-01"><?php the_time('F jS, Y') ?></time>
	<p><?php the_excerpt(); ?></p>
	</div>

</article>
</a>