<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main>
        <!-- Structure home page -->
        <?php get_template_part('main/hero'); ?>
        <?php get_template_part('main/about'); ?>
        <?php get_template_part('main/volunteers'); ?>
        <?php get_template_part('main/news'); ?>
        <?php get_template_part('main/sponsors'); ?>
        <?php get_template_part('main/testimonials'); ?>
        <?php get_template_part('main/faq'); ?>
        <?php get_template_part('main/contact'); ?>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>