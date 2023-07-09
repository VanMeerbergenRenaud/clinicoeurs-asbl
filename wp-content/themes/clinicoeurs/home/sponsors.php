<!-- Sponsors section -->
<section class="sponsor" aria-label="Section des sponsors et partenaires" id="sponsors">
    <span class="sponsor__span"><?= get_field("sponsor-span"); ?></span>
    <h2 role="heading" aria-level="2"><?= get_field("sponsor-title"); ?></h2>
    <p><?= get_field("sponsor-text"); ?></p>
    <!-- Gallery of sponsors -->
    <div class="sponsor__gallery">
        <?php
        $images = get_field('sponsors');

        if ($images) {
            foreach ($images as $image) {
                $image_url = $image['url'];
                $image_alt = $image['alt'];

                echo '<img src="' . $image_url . '" alt="' . $image_alt . '">';
            }
        }
        ?>
    </div>

    <a href="#" class="cta">
        Voir tous les partenaires
        <span></span>
    </a>
</section>