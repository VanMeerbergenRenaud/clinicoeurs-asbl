<!-- Testimonials section -->
<section class="testimonial" aria-label="Section des témoignages" id="testimonials">
    <span class="testimonial__span"><?= get_field("testimonial-span"); ?></span>
    <h2 role="heading" aria-level="2"><?= get_field("testimonial-title"); ?></h2>
    <p><?= get_field("testimonial-text"); ?></p>
    <!-- Testimonials section -->
    <div class="slider">
        <div class="buttons">
            <div class="previous">
                <svg xmlns="http://www.w3.org/2000/svg" width="13.557" height="9.041" viewBox="0 0 13.557 9.041">
                    <path d="M12.786,11.425a.615.615,0,0,1,0,.866L9.928,15.159h10.9a.612.612,0,0,1,0,1.224H9.933L12.8,19.25a.62.62,0,0,1,0,.866.61.61,0,0,1-.862,0L8.049,16.2h0a.687.687,0,0,1-.127-.193.584.584,0,0,1-.047-.235.614.614,0,0,1,.174-.428l3.88-3.908A.6.6,0,0,1,12.786,11.425Z" transform="translate(-7.875 -11.251)" fill="#fefefd"/>
                </svg></div>
            <div class="next">
                <svg xmlns="http://www.w3.org/2000/svg" width="13.557" height="9.041" viewBox="0 0 13.557 9.041">
                    <path d="M16.52,11.425a.615.615,0,0,0,0,.866l2.863,2.867H8.482a.612.612,0,0,0,0,1.224H19.374L16.511,19.25a.62.62,0,0,0,0,.866.61.61,0,0,0,.862,0l3.88-3.908h0a.687.687,0,0,0,.127-.193.584.584,0,0,0,.047-.235.614.614,0,0,0-.174-.428l-3.88-3.908A.6.6,0,0,0,16.52,11.425Z" transform="translate(-7.875 -11.251)" fill="#fefefd"/>
                </svg>
            </div>
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
    <a href="<?= get_home_url() . "/contact" ?>" class="cta" title="Vers la page de contact">
        Devenir bénévole
        <span></span>
    </a>
</section>