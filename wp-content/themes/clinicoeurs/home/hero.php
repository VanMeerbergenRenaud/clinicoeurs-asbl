<!-- Hero section -->
<section class="hero" aria-label="Section de présentation de l'asbl">
    <span>Un doux partage de bonheur</span>
    <h1 role="heading" aria-level="2"><?= get_field("title"); ?></h1>
    <p><?= get_field("text"); ?></p>
    <img src="<?= get_field("img"); ?> " alt="Logo de l'association">
    <a href="<?= get_field("link"); ?>" tabindex="0" title="Vers la page de contact" class="cta">Rejoignez - nous</a>
</section>