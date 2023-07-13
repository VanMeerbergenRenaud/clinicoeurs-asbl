<?php /* Template Name: Contact page template */ ?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
<main>
    <section class="hero" aria-label="Section de contact">
        <h1 role="heading" aria-level="2"><?= get_field("hero-title"); ?></h1>
        <p><?= get_field("hero-text"); ?></p>
        <ul>
            <?php if (have_rows('hero-list')) {
                while (have_rows('hero-list')) {
                    the_row();
                    $link = get_sub_field('link');
                    $icon = get_sub_field('icon');
                    $text = get_sub_field('text');
                    ?>
                    <li>
                        <img src="<?= $icon; ?>" alt="icône de contact">
                        <a href="<?= $link; ?>" class="cta-border">
                            <?= $text; ?>
                        </a>
                    </li>
                    <?php
                }
            }
            ?>
        </ul>
        <a href="<?= get_home_url() . '/contact/#contact'; ?>" class="arrow">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 34 34">
                <g transform="translate(-171 -600)">
                    <g transform="translate(171 600)" fill="none" stroke="#efdb62" stroke-width="1">
                        <circle cx="17" cy="17" r="17" stroke="none"/>
                        <circle cx="17" cy="17" r="16.5" fill="none"/>
                    </g>
                    <path d="M12.471,7.895l.658.658a.708.708,0,0,1,0,1l-5.757,5.76a.708.708,0,0,1-1,0L.606,9.557a.708.708,0,0,1,0-1l.658-.658a.712.712,0,0,1,1.016.012l3.4,3.571V2.961a.709.709,0,0,1,.711-.711h.948a.709.709,0,0,1,.711.711v8.516l3.4-3.571A.707.707,0,0,1,12.471,7.895Z" transform="translate(181.603 607.75)" fill="#efdb62"/>
                </g>
            </svg>
        </a>
    </section>
    <?php get_template_part('otherParts/contact'); ?>
    <section class="localisation">
        <h2 class="localisation__title" role="heading" aria-level="2">Notre localisation</h2>
        <img src="<?= get_field("localisation"); ?>" alt="Vue de l'établissement de l'asbl depuis Google Map" class="localisation__img">
    </section>
</main>
<?php endwhile; endif; ?>
<?= get_footer(); ?>