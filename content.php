<article class="post">	 
	<?php if(is_single()) { ?> 
	<h1><?php the_title( '', '' ); ?></h1>
	<?php } else { ?>
	<h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title( '', '' ); ?></a></h1>
	<?php } ?>

	<h3 class="post--timestamp"><?php the_time('F jS, Y') ?> 
		<?php if ( comments_open() ) : ?>
				<?php comments_popup_link(__('Leave a reply'), __('1 Reply'), __('% Replies')); ?>
		<?php endif; // comments_open() ?>
	</h3>
	<div class="post--content">
		<?php if ( is_search() ) : ?>
			<?php the_excerpt(); ?>
		<?php elseif (is_home()) : ?>
   		    <?php the_excerpt(); ?>
		<?php elseif (is_category()) : ?>
   		    <?php the_excerpt(); ?>
		<?php else: ?>
   		    <?php the_content( __( 'Continue reading' ) ); ?>
		<?php endif; ?>
	</div>
</article><!-- #post-## -->
