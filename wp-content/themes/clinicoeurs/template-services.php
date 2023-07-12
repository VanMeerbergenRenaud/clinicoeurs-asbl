<?php /* Template Name: Services page template */ ?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
<main>
    <section class="hero" aria-label="Section de présentation de la page des services">
        <h1 role="heading" aria-level="2"><?= get_field("services-title"); ?></h1>
        <p><?= get_field("services-text"); ?></p>
        <img src="<?= get_field("services-img"); ?>" alt="Deux clowns de l'asbl">
        <a href="<?= get_home_url() . "/contact"; ?>" class="cta" title="Vers la page de contact">
            Rejoignez - nous
            <span></span>
        </a>
    </section>
    <section class="services" aria-label="Section des différents services de l'asbl">
        <span class="services__span">Nos services</span>
        <h2 class="services__title" role="heading" aria-level="2">Présentation des différents services de l’ASBL</h2>
        <!-- Navigation de tri -->
        <nav class="tabs" aria-label="Customer service">
            <h3 class="hidden" role="heading" aria-level="3">Navigation entre les différents services</h3>
            <button class="tablinks active" data-service="cliniclowns">Cliniclowns</button>
            <button class="tablinks" data-service="clinitalents">Clinitalents</button>
            <button class="tablinks" data-service="clinijuniors">Clinijuniors</button>
            <button class="tablinks" data-service="clinisnoezs">Clinisnoezs</button>
        </nav>
        <!-- Contenu affiché -->
        <div class="wrapper_tabcontent">
            <?php if (have_rows('services-asbl')) : ?>
                <?php while (have_rows('services-asbl')) : the_row(); ?>

                    <?php
                    $image = get_sub_field('img');
                    $title = get_sub_field('title');
                    $text = get_sub_field('text');
                    ?>

                    <article id="<?= sanitize_title($title); ?>" class="tabcontent<?php if (get_row_index() === 1) echo ' active'; ?>">
                        <img src="<?= $image; ?>" alt="">
                        <h4 role="heading" aria-level="4"><?= $title; ?></h4>
                        <p><?= $text; ?></p>
                    </article>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
    <section class="gallery">
        <span><?= get_field("services-gallery-span"); ?></span>
        <h2 role="heading" aria-level="3"><?= get_field("services-gallery-title"); ?></h2>
        <div class="gallery__slider">
            <div class="gallery__slider__img">
                <?php
                $images = get_field('services-gallery');
                if ($images) {
                    foreach ($images as $image) {
                        $image_url = $image['url'];
                        $image_alt = $image['alt'];
                        echo '<img src="' . $image_url . '" alt="' . $image_alt . '">';
                    }
                }
                ?>
            </div>
        </div>
    </section>
    <section class="members">
        <span class="members__title"><?= get_field("services-members-span"); ?></span>
        <h2 role="heading" aria-level="3"><?= get_field("services-members-title"); ?></h2>
        <p><?= get_field("services-members-text"); ?></p>
        <img src="<?= get_field("services-members-img"); ?>" alt="">
        <a href="<?= get_home_url() . "/volunteers"; ?>" class="cta" title="Vers la page des bénévoles">
            Voir tous les membres
            <span></span>
        </a>
    </section>
    <section class="callToAction">
        <h2 role="heading" aria-level="2">Volontaire pour nous soutenir sous forme de don&nbsp;?</h2>
        <p>
            N’hésitez pas à nous <a href="<?= get_home_url() . "/contact"; ?>">contacter</a> et à regarder notre
            <a href="<?= get_home_url() . "/donations"; ?>">page de dons</a> expliquant tout ce que vous devez savoir.
        </p>
        <a href="<?= get_home_url() . "/contact"; ?>" class="cta" title="Vers la page de contact">
            Nous contacter
            <span></span>
        </a>
    </section>
</main>
<?php endwhile; endif; ?>
<?= get_footer(); ?>