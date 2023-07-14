<?php /* Template Name: Donations page template */ ?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main>
        <section class="hero" aria-label="Section d'introduction aux dons et legs en duo">
            <h1 role="heading" aria-level="2"><?= get_field("hero-title"); ?></h1>
            <p><?= get_field("hero-text"); ?></p>
            <img src="<?= get_field("hero-img"); ?>" alt="Cliniclown aidant un patient en chaise roulante">
            <a href="<?= get_home_url() . "/contact"; ?>" class="cta" title="Vers la page de contact">
                Nous soutenir
                <span></span>
            </a>
        </section>
        <?php get_template_part('otherParts/backToTop'); ?>
        <?php if (have_rows('donations')) : ?>
            <?php while (have_rows('donations')) : the_row(); ?>
                <?php
                $class = get_sub_field('class');
                $title = get_sub_field('title');
                $subtitle = get_sub_field('subtitle');
                $text = get_sub_field('text');
                $image = get_sub_field('img');
                $list = get_sub_field('list');
                ?>

                <section class="<?= esc_attr($class); ?>">
                    <?php if ($title): ?>
                        <span class="<?= esc_attr($class); ?>__span"><?= esc_html($title); ?></span>
                    <?php endif; ?>
                    <?php if ($subtitle): ?>
                        <h2 role="heading" aria-level="2"><?= esc_html($subtitle); ?></h2>
                    <?php endif; ?>
                    <?php if ($text): ?>
                        <p><?= esc_html($text); ?></p>
                    <?php endif; ?>
                    <?php if ($image): ?>
                        <img src="<?= esc_url($image); ?>" alt="Cliniclowns en groupe et joyeux">
                    <?php endif; ?>
                    <?php if ($list): ?>
                        <ul>
                            <?php if (have_rows('list')) : ?>
                                <?php while (have_rows('list')) : the_row(); ?>
                                    <li>
                                        <?php the_sub_field('title'); ?>
                                        <p><?php the_sub_field('text'); ?></p>
                                    </li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    <?php endif; ?>
                </section>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php get_template_part('otherParts/callToAction'); ?>
    </main>
<?php endwhile; endif; ?>
<?= get_footer(); ?>