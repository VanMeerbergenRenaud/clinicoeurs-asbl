<?php /* Template Name: News page template */ ?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
<main>
    <section class="hero" aria-label="Section des actualités">
        <h1 role="heading" aria-level="2"><?= get_field("hero-title"); ?></h1>
        <p><?= get_field("hero-text"); ?></p>
        <img src="<?= get_field("hero-img"); ?>" alt="Quatre clowns de l'asbl">
        <a href="<?= get_home_url() . "/contact"; ?>" class="cta" title="Vers la page de contact">
            Rejoignez - nous
            <span></span>
        </a>
    </section>
    <?php get_template_part('otherParts/backToTop'); ?>
    <section class="news">
        <h2 role="heading" aria-level="2"><?= get_field("news-title"); ?></h2>
        <div class="news__articles">
            <?php
                $news = new WP_Query([
                    'post_type' => 'news',
                    'posts_per_page' => 5,
                ]);

            if($news->have_posts()): while($news->have_posts()): $news->the_post();
                ?>
                <article>
                    <img src="<?= get_field("img"); ?>" alt="photo d'ensemble de l'activité du <?= get_field("date"); ?>">
                    <span><?= get_field("date"); ?></span>
                    <h3 role="heading" aria-level="3"><?= get_field("title"); ?></h3>
                    <a href="<?= get_field("link"); ?>" class="cta-border" title="Vers la page de l'article">
                        En savoir plus
                        <svg xmlns="http://www.w3.org/2000/svg" height="0.8rem" viewBox="0 0 320 512">
                            <path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"/>
                        </svg>
                    </a>
                </article>
            <?php endwhile; else: ?>
                <p class="news__empty">Nous n'avons pas de nouvelles récentes pour le moment."</p>
            <?php endif; ?>
        </div>
    </section>
    <?php get_template_part('otherParts/callToAction'); ?>
</main>
<?php endwhile; endif; ?>
<?= get_footer(); ?>