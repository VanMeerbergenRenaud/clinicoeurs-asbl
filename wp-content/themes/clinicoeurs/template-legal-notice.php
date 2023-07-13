<?php /* Template Name: Legal Notice page template */ ?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main>
        <section class="legal">
            <h1 role="heading" aria-level="2">Mentions légales</h1>
            <ul>
                <li>Informations générales
                    <p>
                        ASBL Les Clinicoeurs de la Salm, Place de Salm 2 S21, B-6690 Vielsalm, Belgique.<br>
                        N° de téléphone +32 (0)472 91 16 54<br>
                        Adresse du courrier électronique : clinicoeurs@gmail.com<br>
                        Conditions générales de vente des produits vendus sur le site : www.clinicoeursdelasalm.be<br>
                        Numéro de Chambre de Commerce : BE 0697.657.553<br>
                        Date de dernière mise à jour <?= get_the_modified_date('j F Y'); ?><br>
                    </p>
                </li>
                <?php if (have_rows('legal-list')) :
                    while (have_rows('legal-list')) : the_row();
                        $number = get_sub_field('number');
                        $title = get_sub_field('title');
                        $text = get_sub_field('text');
                        ?>
                        <li><?= $number; ?>&nbsp;-&nbsp;<?= $title; ?>
                            <p><?= $text; ?></p>
                        </li>
                    <?php endwhile;
                endif; ?>
            </ul>
            <a href="<?= get_home_url() . '/accueil' ?>" class="cta">
                Retourner à l’accueil
                <span></span>
            </a>
        </section>
    </main>
<?php endwhile; endif; ?>
<?= get_footer(); ?>