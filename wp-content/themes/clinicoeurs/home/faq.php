<!-- Faq section -->
<section class="faq" aria-label="Section des questions et réponses">
    <span class="faq__span"><?= get_field("faq-span"); ?></span>
    <h2 role="heading" aria-level="2"><?= get_field("faq-title"); ?></h2>
    <ul>
        <?php if (have_rows('faq-list')) : ?>
            <?php while (have_rows('faq-list')) : the_row(); ?>
                <li>
                    <input type="checkbox" name="accordion" id="question-<?php echo get_sub_field('id'); ?>">
                    <label for="question-<?php echo get_sub_field('id'); ?>">
                        <?php echo get_sub_field('title'); ?>
                    </label>
                    <p>
                        <?php echo get_sub_field('text'); ?>
                    </p>
                </li>
            <?php endwhile; ?>
        <?php endif; ?>
    </ul>
</section>