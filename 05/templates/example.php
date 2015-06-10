<?php
/*
Template Name: Example Template
*/

//I am a copy of the index.php file :)
get_header();

?>   

<?php if ( is_active_sidebar( 'top_banner' ) ) : ?>
    <?php dynamic_sidebar( 'top_banner' ); ?>
<?php endif; ?>

<h2>Woo Sidebars</h2>
<a target="_blank" href="https://wordpress.org/plugins/woosidebars/">https://wordpress.org/plugins/woosidebars/</a>
<?php get_footer(); ?>

<h2>Shortcodes</h2>
<?php if ( have_posts() ) : ?>

    <?php /* Start the Loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>   
<?php endif; ?>  