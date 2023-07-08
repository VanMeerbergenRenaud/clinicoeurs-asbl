<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main>
        <?php get_template_part('home/hero'); ?>
        <?php get_template_part('home/about'); ?>
        <?php get_template_part('home/volunteers'); ?>
        <?php get_template_part('home/news'); ?>
        <?php get_template_part('home/sponsors'); ?>
        <?php get_template_part('home/testimonials'); ?>
        <?php get_template_part('home/faq'); ?>
        <?php get_template_part('home/contact'); ?>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>