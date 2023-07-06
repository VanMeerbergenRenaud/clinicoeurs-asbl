<!-- Navigation menu -->
<nav class="navigation" role="navigation" aria-label="Main">
    <h2 class="hidden" role="heading" aria-level="2">Menu de navigation</h2>
    <a href="<?= get_home_url(); ?>" class="navigation__home" title="Retour à l'accueil">
        <img src="<?= get_field('logo'); ?>" alt="Trèfle à 4 feuilles coloré suivi du nom de l'asbl" class="logo" aria-label="Clinicoeurs ASBL Vielsam">
    </a>
    <input id="menu-toggle" class="menu-toggle" type="checkbox" tabindex="0">
    <label class='menu-button-container' for="menu-toggle">
        <span class='menu-button'></span>
    </label>
    <div class="navigation__container">
        <ul class="list menu">
            <?php if (have_rows('navigation-links')) : while (have_rows('navigation-links')) : the_row(); ?>
                <li class="item">
                    <a href="<?php the_sub_field('link-url'); ?>" class="link">
                        <?php the_sub_field('link-text'); ?>
                    </a>
                </li>
            <?php endwhile; endif; ?>
        </ul>
        <a href="<?= get_home_url(); ?>" class="languages" title="Changer la langue en français">
            <span class="">fr</span>
        </a>
    </div>
</nav>