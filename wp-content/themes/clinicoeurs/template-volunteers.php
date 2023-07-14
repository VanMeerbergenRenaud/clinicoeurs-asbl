<?php /* Template Name: Volunteers page template */ ?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
<main>
    <section class="hero" aria-label="Section de présentation de la page des bénévoles et partenaires">
        <h1 role="heading" aria-level="2"><?= get_field("hero-title"); ?></h1>
        <p><?= get_field("hero-text"); ?></p>
        <img src="<?= get_field("hero-img"); ?>" alt="Trois clowns de l'asbl">
        <a href="<?= get_home_url() . "/contact"; ?>" class="cta" title="Vers la page de contact">
            Rejoignez - nous
            <span></span>
        </a>
    </section>
    <?php get_template_part('otherParts/backToTop.php'); ?>
    <section class="volunteers" aria-label="Présentation des différents bénévoles">
        <span class="volunteers__span"><?= get_field("volunteers-span"); ?></span>
        <h2 role="heading" aria-level="2"><?= get_field("volunteers-title"); ?></h2>
        <img src="<?= get_field("volunteers-img"); ?>" alt="Sept photos des principaux bénévoles de l'asbl">
        <a href="<?= get_home_url() . "/contact"; ?>" class="cta" title="Vers la page de contact">
            Devenir bénévole
            <span></span>
        </a>
    </section>
    <section class="partners" aria-label="Présentation des différents partenaires">
        <span class="partners__span"><?= get_field("partners-span"); ?></span>
        <h2 role="heading" aria-level="2"><?= get_field("partners-title"); ?></h2>
        <p><?= get_field("partners-text"); ?></p>
        <!-- Partners Gallery -->
        <div class="partners__gallery">
            <?php
            $images = get_field('partners-gallery');

            if ($images) {
                foreach ($images as $image) {
                    $image_url = $image['url'];
                    $image_alt = $image['alt'];

                    echo '<img src="' . $image_url . '" alt="' . $image_alt . '">';
                }
            }
            ?>
        </div>
        <a href="<?= get_home_url() . '/contact'; ?>" class="cta" title="Vers la page de contact">
            Devenir partenaire
            <span></span>
        </a>
    </section>
    <section class="sponsors" aria-label="Présentation des différents sponsors">
        <span class="sponsors__span"><?= get_field("sponsors-span"); ?></span>
        <h2 role="heading" aria-level="2"><?= get_field("sponsors-title"); ?></h2>
        <p><?= get_field("sponsors-text"); ?></p>
        <!-- Sponsors Gallery -->
        <div class="sponsors__gallery">
            <?php
            $images = get_field('sponsors-gallery');

            if ($images) {
                foreach ($images as $image) {
                    $image_url = $image['url'];
                    $image_alt = $image['alt'];

                    echo '<img src="' . $image_url . '" alt="' . $image_alt . '">';
                }
            }
            ?>
        </div>
        <a href="<?= get_home_url() . '/contact'; ?>" class="cta" title="Vers la page de contact">
            Devenir un sponsor
            <span></span>
        </a>
    </section>
    <?php get_template_part('otherParts/callToAction'); ?>
</main>
<?php endwhile; endif; ?>
<?= get_footer(); ?>