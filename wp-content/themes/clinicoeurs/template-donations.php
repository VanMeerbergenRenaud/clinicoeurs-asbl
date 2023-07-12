<?php /* Template Name: Donations page template */ ?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
<main>
    <section class="hero" aria-label="Section des donations">
        <h1 role="heading" aria-level="2"><?= get_field("hero-title"); ?></h1>
        <p><?= get_field("hero-text"); ?></p>
        <img src="<?= get_field("hero-img"); ?>" alt="Cliniclown aidant un patient en chaise roulante">
        <a href="<?= get_home_url() . "/contact"; ?>" class="cta" title="Vers la page de contact">
            Nous soutenir
            <span></span>
        </a>
    </section>
    <section class="operation" aria-label="Présentation du système des dons">
        <span class="operation__span"><?= get_field("operation-span"); ?></span>
        <h2 role="heading" aria-level="2"><?= get_field("operation-title"); ?></h2>
        <p><?= get_field("operation-text"); ?></p>
        <ul>
            <?php if (have_rows('operation-list')) {
                while (have_rows('operation-list')) {
                    the_row();
                    $text = get_sub_field('text');
                    ?>
                    <li><?= $text; ?></li>
                    <?php
                }
            }
            ?>
        </ul>
        <img src="<?= get_field("operation-img"); ?>" class="operation__img" alt="Cliniclowns avec un patient">
    </section>
    <section class="benefits" aria-label="Section des avantages sur les dons">
        <span class="benefits__span"><?= get_field("benefits-span"); ?></span>
        <h2 role="heading" aria-level="2"><?= get_field("benefits-title"); ?></h2>
        <p><?= get_field("benefits-text"); ?></p>
        <img src="<?= get_field("benefits-img"); ?>" class="benefits__img" alt="Cliniclowns en groupe et joyeux">
        <ul>
            <?php if (have_rows('benefits-list')) {
                while (have_rows('benefits-list')) {
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
    <section class="details" aria-label="Section du processus d'une donation">
        <span class="details__span"><?= get_field("details-span"); ?></span>
        <h2 role="heading" aria-level="2"><?= get_field("details-title"); ?></h2>
        <img src="<?= get_field("details-img"); ?>" alt="Cliniclowns en groupe et joyeux">
    </section>
    <section class="legislation" aria-label="Section sur la législation belge et les avantages fiscaux sur les dons">
        <span class="legislation__span"><?= get_field("legislation-span"); ?></span>
        <h2 role="heading" aria-level="2"><?= get_field("legislation-title"); ?></h2>
        <img src="<?= get_field("legislation-img"); ?>" class="legislation__img" alt="Cliniclowns en groupe et joyeux">
        <ul>
            <?php if (have_rows('legislation-list')) {
                while (have_rows('legislation-list')) {
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
    <section class="legsDuo" aria-label="Section sur la législation belge et les avantages fiscaux sur les dons">
        <span class="legsDuo__span"><?= get_field("legsDuo-span"); ?></span>
        <h2 role="heading" aria-level="2"><?= get_field("legsDuo-title"); ?></h2>
        <p><?= get_field("legsDuo-text"); ?></p>
        <img src="<?= get_field("legsDuo-img"); ?>" class="legsDuo__img" alt="Cliniclowns en groupe et joyeux">
        <ul>
            <?php if (have_rows('legsDuo-list')) {
                while (have_rows('legsDuo-list')) {
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
</main>
<?php endwhile; endif; ?>
<?= get_footer(); ?>