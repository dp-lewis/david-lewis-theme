<?php
get_header();
?>
<div class="p-4">
    <div class="font-display uppercase text-center text-2xl">David Lewis</div>
    <div class="font-body text-center text-sm">Keep tech fun</div>
</div>
<?php
$latestPost = get_posts( array(
    'posts_per_page' => 1
) );

if ( $latestPost ) {
    foreach ( $latestPost as $post ) {
        setup_postdata( $post ); 
        get_template_part( 'content', get_post_format() );
    }
    wp_reset_postdata();
}

if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        // get_template_part( 'content', get_post_format() );
    endwhile;
endif;

$communityPosts = get_posts( array(
    'posts_per_page' => 10,
    'category'       => 27
) );

if ( $communityPosts ) {
?>
<section class="pl-4 pr-4 mb-4" id="community">
    <header>
      <h1 class="text-xl mb-0">Community</h1>
      <h2 class="text-xs mb-4">I&apos;m a regular host at SydCSS with an ongoing battle with public speaking anxiety.</h2>
    </header>
    <div class="overflow-x-auto gradient">
        <div class="flex flex-no-wrap">
        <?php
            foreach ( $communityPosts as $post ) {
                setup_postdata( $post ); 
                get_template_part( 'card', get_post_format() );
            }
            wp_reset_postdata();
        ?>
        </div>
    </div>
</section>
<?php
}

$devdesignPosts = get_posts( array(
    'posts_per_page' => 10,
    'category'       => 29
) );

if ( $devdesignPosts ) {
    ?>
<section class="pl-4 pr-4 mb-4" id="dev">
    <header>
      <h1 class="text-xl mb-0">Design &amp; Development</h1>
      <h2 class="text-xs mb-4">Whilst my day job doesn&apos;t require much hands on coding, I still like to get my hands dirty with tech.</h2>
    </header>
    <div class="overflow-x-auto gradient">
        <div class="flex flex-no-wrap">
        <?php
            foreach ( $devdesignPosts as $post ) {
                setup_postdata( $post ); 
                get_template_part( 'card', get_post_format() );
            }
            wp_reset_postdata();
        ?>
        </div>
    </div>
</section>
<?php
    }

get_footer();