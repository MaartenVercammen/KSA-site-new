<?php get_header(); ?>

<section class="page-wrap">
        <?php get_template_part('includes/section', "content"); ?>
</section>

<?php dynamic_sidebar( 'footer' ); ?>
<?php get_footer(); ?>