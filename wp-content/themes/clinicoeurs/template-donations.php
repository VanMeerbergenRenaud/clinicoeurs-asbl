<?php /* Template Name: Donations page template */ ?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main>
        <?php
        // Fonction pour afficher les diverses sections ayant presque la même structure.
        function display_section_structure($section_name): void
        {
            $section_span = get_field($section_name . '-span');
            $section_title = get_field($section_name . '-title');
            $section_text = get_field($section_name . '-text');
            $section_img = get_field($section_name . '-img');
            $list_name = $section_name . '-list';

            ?>
            <section class="<?= $section_name ?>" aria-label="Section <?= $section_name ?>">
                <?php if ($section_span) : ?>
                    <span class="<?= $section_name ?>__span"><?= get_field($section_name . '-span'); ?></span>
                <?php endif; ?>

                <?php if ($section_title) : ?>
                    <h2 role="heading" aria-level="2"><?= $section_title; ?></h2>
                <?php endif; ?>

                <?php if ($section_text) : ?>
                    <p><?= $section_text; ?></p>
                <?php endif; ?>

                <?php if ($section_img) : ?>
                    <img src="<?= $section_img; ?>" alt="Cliniclowns en groupe et joyeux">
                <?php endif; ?>

                <?php if (have_rows($list_name)) : ?>
                    <ul>
                        <?php while (have_rows($list_name)) : the_row();
                            $title = get_sub_field('title');
                            $text = get_sub_field('text');
                            ?>
                            <li>
                                <?= $title; ?>
                                <?php if ($text) : ?>
                                    <p><?= $text; ?></p>
                                <?php endif; ?>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
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
        display_section_structure('operation');
        // Section "benefits"
        display_section_structure('benefits');
        // Section "details"
        display_section_structure('details');
        // Section "legislation"
        display_section_structure('legislation');
        // Section "legsDuo"
        display_section_structure('legsDuo');
        ?>
    </main>
<?php endwhile; endif; ?>
<?= get_footer(); ?>