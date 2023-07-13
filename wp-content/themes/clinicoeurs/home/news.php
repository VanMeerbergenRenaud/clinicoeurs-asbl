<!-- News section -->
<section class="news" aria-label="Section des actualités" id="news">
    <span class="news__span"><?= get_field("news-span"); ?></span>
    <h2 role="heading" aria-level="2"><?= get_field("news-title"); ?></h2>
    <p><?= get_field("news-text"); ?></p>
    <img src="<?= get_field("news-img"); ?>" class="news__img" alt="Cliniclowns avec un patient">
    <a href="<?= get_home_url() . '/news'; ?>" class="cta" title="Vers la page des actualités">
        Voir toutes les actualités
        <span></span>
    </a>
</section>