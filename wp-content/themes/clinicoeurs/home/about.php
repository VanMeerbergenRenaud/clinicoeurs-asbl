<!-- About section -->
<section class="about" aria-label="Section des services" id="services">
    <span class="about__span">Nos services</span>
    <h2 class="about__title">Présentation des différents services de l’ASBL</h2>
    <?php
    if (have_rows('home-about')) {
        while (have_rows('home-about')) {
            the_row();

            $image = get_sub_field('about-img');
            $title = get_sub_field('about-title');
            $text = get_sub_field('about-text');
            $link = get_sub_field('about-link');
            ?>

            <article class="about__card">
                <img src="<?= $image; ?>" alt="image de cliniclowns, de clinitalents et de clinijuniors">
                <h3><?= $title; ?></h3>
                <p><?= $text; ?></p>
                <a href="<?= $link; ?>" class="cta" title="Vers la page des services">
                    En savoir plus
                    <span></span>
                </a>
            </article>
            <?php
        }
    }
    ?>
</section>