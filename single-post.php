<?php
get_header();
the_post();
$categories = get_the_category();
?>
<article class="max-w-2xl m-auto p-4 pb-24">
  <header class="mb-8">
    <div class="mb-5 inline-block text-sm font-medium bg-blue-500 py-1 px-2 rounded text-blue-100 align-middle"><?php echo esc_html( $categories[0]->name ); ?></div>
    <h1 class="text-5xl leading-none mb-2">
      <?php the_title(); ?>
    </h1>
    <time class="block mb-2 text-sm text-gray-600" datetime="<?php the_time('F jS, Y') ?>"><?php the_time('F jS, Y') ?></time>
  </header>
  <?php 
  the_content(); 
  ?>
</article>
<?php
get_footer();