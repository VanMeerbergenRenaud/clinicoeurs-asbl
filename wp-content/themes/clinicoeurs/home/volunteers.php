<!-- Volunteers section -->
<section class="volunteers" aria-label="Section des bénévoles">
    <span class="volunteers__span"><?= get_field("volunteers-span"); ?></span>
    <h2 role="heading" aria-level="2"><?= get_field("volunteers-title"); ?></h2>
    <p><?= get_field("volunteers-text"); ?></p>
    <div class="slider-wrapper">
        <div class="slider">
            <?php
            $gallery_images = get_field("volunteers-img");
            if ($gallery_images) {
                $image_count = count($gallery_images);
                $slide_id = 1;
                foreach ($gallery_images as $image) {
                    if ($slide_id <= 4) { // Limiter le nombre d'images à afficher à 4
                        echo '<img src="' . esc_url($image['url']) . '" alt="image de divers bénévoles" id="slide' . $slide_id . '">';
                        $slide_id++;
                    }
                }
            }
            ?>
        </div>
        <div class="slider-nav">
            <a href="#slide1" tabindex="0" title="Vers la première image" aria-labelledby="slide1"></a>
            <a href="#slide2" title="Vers la seconde image" aria-labelledby="slide2"></a>
            <a href="#slide3" title="Vers la troisième image" aria-labelledby="slide3"></a>
            <a href="#slide4" title="Vers la dernière image" aria-labelledby="slide4"></a>
        </div>
    </div>
    <ul class="list" role="list">
        <?php if (have_rows('volunteers-list')) : ?>
            <?php while (have_rows('volunteers-list')) : the_row(); ?>
                <li class="list__item" role="listitem">
                    <span class="list__item__text">
                        <?php the_sub_field('text'); ?>
                    </span>
                </li>
            <?php endwhile; ?>
        <?php endif; ?>
    </ul>
</section>