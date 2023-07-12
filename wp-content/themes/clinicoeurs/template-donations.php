<?php /* Template Name: Donations page template */ ?>
<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>

    <main>
        <?php
        // Fonction pour afficher les diverses sections ayant presque la même structure.
        function display_section_with_list($section_name)
        {
            $section_title = get_field($section_name . '-title');
            $section_text = get_field($section_name . '-text');
            $section_img = get_field($section_name . '-img');
            $list_name = $section_name . '-list';

            ?>
            <section class="<?= $section_name ?>" aria-label="Section <?= $section_name ?>">
                <span class="<?= $section_name ?>__span"><?= get_field($section_name . '-span'); ?></span>
                <h2 role="heading" aria-level="2"><?= $section_title; ?></h2>
                <p><?= $section_text; ?></p>
                <img src="<?= $section_img; ?>" alt="Cliniclowns en groupe et joyeux">
                <ul>
                    <?php if (have_rows($list_name)) {
                        while (have_rows($list_name)) {
                            the_row();
                            $title = get_sub_field('title');
                            $text = get_sub_field('text');
                            ?>
                            <li>
                                <?= $title; ?>
                                <p><?= $text; ?></p>
                            </li>
                            <?php
                        }
                    }
                    ?>
                </ul>
            </section>
            <?php
        }
        ?>
        <section class="hero" aria-label="Section des donations">
            <h1 role="heading" aria-level="2"><?= get_field("hero-title"); ?></h1>
            <p><?= get_field("hero-text"); ?></p>
            <img src="<?= get_field("hero-img"); ?>" alt="Cliniclown aidant un patient en chaise roulante">
            <a href="<?= get_home_url() . "/contact"; ?>" class="cta" title="Vers la page de contact">
                Nous soutenir
                <span></span>
            </a>
        </section>
        <?php
        // Section "operation"
        display_section_with_list('operation');
        // Section "benefits"
        display_section_with_list('benefits');
        ?>
        <section class="details" aria-label="Section du processus d'une donation">
            <span class="details__span"><?= get_field("details-span"); ?></span>
            <h2 role="heading" aria-level="2"><?= get_field("details-title"); ?></h2>
            <img src="<?= get_field("details-img"); ?>" alt="Cliniclowns en groupe et joyeux">
        </section>
        <?php
        // Section "legislation"
        display_section_with_list('legislation');
        // Section "legsDuo"
        display_section_with_list('legsDuo');
        ?>
    </main>
<?php endwhile; endif; ?>
<?= get_footer(); ?>