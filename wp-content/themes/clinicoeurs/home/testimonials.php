<!-- Testimonials section -->
<section class="testimonial" aria-label="Section des témoignages">
    <span class="testimonial__span"><?= get_field("testimonial-span"); ?></span>
    <h2 role="heading" aria-level="2"><?= get_field("testimonial-title"); ?></h2>
    <p><?= get_field("testimonial-text"); ?></p>
    <!-- Testimonials section -->
    <div class="slider">
        <div class="buttons">
            <div class="previous"></div>
            <div class="next"></div>
        </div>

        <?php if (have_rows('testimonial-section')) :
            while (have_rows('testimonial-section')) : the_row(); ?>
                <div class="slide">
                    <img src="<?= get_sub_field('img'); ?>" alt="image de l'auteur, <?= get_sub_field('name'); ?>">
                    <p><?= get_sub_field('name'); ?><br><span><?= get_sub_field('category'); ?></span></p>
                    <blockquote>
                        <?= get_sub_field('text'); ?>
                        <cite class="hidden"><?= get_sub_field('name'); ?></cite>
                    </blockquote>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <a href="#" class="cta">
        Devenir bénévole
        <span></span>
    </a>
</section>