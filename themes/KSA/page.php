<?php wp_head(); ?>

<section class="page-wrap">
    <div class="head">
        <h1> <?php the_title(); ?> </h1>
        <?php the_post_thumbnail() ?>
    </div>
    <nav>
        <?php wp_nav_menu(array(
            'theme_location' => 'header-menu',
            'fallback_cb' => false
        )); ?>
    </nav>
    <div class="Container">

        <?php get_template_part( 'includes/section', "content" );?>
    </div>
    <?php get_footer(); ?>
</section>
