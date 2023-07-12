<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
<?php get_header(); ?>
    <main>
        <section class="error404" aria-label="Section de la page d'erreur 404">
            <h1 class="error404__title">Page non trouvée</h1>
            <p class="error404__text">Vous êtes perdu...&nbsp;?</p>
            <a href="<?= get_home_url(); ?>" title="Retour à l'accueil" class="error404__link cta-border">
                Retourner à l'accueil
            </a>
        </section>
    </main>
<?php get_footer(); ?>