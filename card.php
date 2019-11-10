<article class="bg-white w-3/5 md:w-2/5 flex-grow-0 md:flex-grow-1 flex-shrink-0 md:flex-shrink-1 mr-3">
    <?php if (has_post_thumbnail( $post->ID ) ) { ?>
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		<img src="<?php echo $image[0]; ?>" class="w-full" />
	<?php } ?>
    <div class="p-4">
        <h1 class="leading-tight"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title( '', '' ); ?></a></h1>
        <time class="block mb-2 text-sm text-gray-600" datetime="2019-01-01"><?php the_time('F jS, Y') ?></time>
    </div>
</article>   


