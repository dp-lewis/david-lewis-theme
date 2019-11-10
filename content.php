<article class="pl-4 pr-4 mb-4 md:flex">
	<?php if (has_post_thumbnail( $post->ID ) ) { ?>
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		<img src="<?php echo $image[0]; ?>" class="md:w-3/5" />
	<?php } ?>
	<div class="bg-white p-4">
	<h1 class="text-2xl leading-tight"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title( '', '' ); ?></a></h1>
	<time class="block mb-2 text-sm text-gray-600" datetime="2019-01-01"><?php the_time('F jS, Y') ?></time>
	<p><?php the_excerpt(); ?></p>
	</div>
</article>