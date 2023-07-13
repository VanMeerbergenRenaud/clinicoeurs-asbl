<!-- Navigation menu -->
<nav class="navigation" role="navigation" aria-label="Main">
    <h2 class="hidden" role="heading" aria-level="2">Menu de navigation</h2>
    <a href="<?= get_home_url() . '/accueil'; ?>" class="navigation__home" title="Retour à l'accueil">
        <img src="<?= get_field('logo', 'option'); ?>" alt="Trèfle à 4 feuilles coloré suivi du nom de l'asbl" class="logo" aria-label="Clinicoeurs ASBL Vielsam">
    </a>
    <input id="menu-toggle" class="menu-toggle" type="checkbox" tabindex="0">
    <label class='menu-button-container' for="menu-toggle">
        <span class='menu-button'></span>
    </label>
    <div class="navigation__container">
        <ul class="list">
            <?php if (have_rows('navigation-links', 'option')) : while (have_rows('navigation-links', 'option')) : the_row(); ?>
                <li class="item">
                    <a href="<?php the_sub_field('link-url'); ?>" class="link" tabindex="0">
                        <?php the_sub_field('link-text'); ?>
                    </a>
                </li>
            <?php endwhile; endif; ?>
        </ul>
        <a href="<?= get_home_url() . '/fr'; ?>" class="languages" title="Changer la langue du site">
            <span class="">fr</span>
        </a>
    </div>
</nav>