<!-- Hero section -->
<section class="hero" aria-label="Section de présentation de l'asbl">
    <span class="hero__span">Un doux partage de bonheur</span>
    <h1 role="heading" aria-level="2"><?= get_field("title"); ?></h1>
    <p><?= get_field("text"); ?></p>
    <img src="<?= get_field("img"); ?> " alt="Trèfle à 4 feuilles comprenant 4 cliniclowns à l'intérieur">
    <a href="<?= get_field("link"); ?>" tabindex="0" title="Vers la page de contact" class="cta">
        Rejoignez - nous
        <span></span>
    </a>
</section>