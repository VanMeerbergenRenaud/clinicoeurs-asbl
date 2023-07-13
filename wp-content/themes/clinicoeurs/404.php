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
            <h1 class="error404__title" role="heading" aria-level="2">ERREUR 404</h1>
            <h2 class="error404__subtitle" role="heading" aria-level="3">Page non trouvée…</h2>
            <p class="error404__text">Désolé nous n'avons pas su trouver la page que vous avez essayé de chercher. Nous vous conseillons de retourner vers la page principale.</p>
            <a href="<?= get_home_url() . '/accueil'; ?>" title="Retour à l'accueil" class="error404__link cta-border">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                    <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/>
                </svg>
                Retourner à l'accueil
            </a>
        </section>
    </main>
<?php get_footer(); ?>