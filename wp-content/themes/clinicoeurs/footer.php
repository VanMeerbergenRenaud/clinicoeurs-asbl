    <footer role="contentinfo" class="footer">
        <section class="f-first">
            <h2><?= get_field('f-first-title'); ?></h2>
            <nav>
                <h3 class="hidden"><?= get_field('f-first-title'); ?></h3>
                <ul class="f-navigation">
                    <?php if (have_rows('f-first-links')) {
                        while (have_rows('f-first-links')) {
                            the_row();
                            $url = get_sub_field('url');
                            $text = get_sub_field('text');
                            ?>
                            <li><a href="<?= $url; ?>"><?= $text; ?></a></li>
                        <?php
                        }
                    }
                    ?>
                </ul>
            </nav>
        </section>
        <section class="f-second">
            <h2><?= get_field('f-second-title'); ?></h2>
            <nav>
                <h3 class="hidden"><?= get_field('f-second-title'); ?></h3>
                <ul class="f-contributions">
                    <?php if (have_rows('f-second-links')) {
                        while (have_rows('f-second-links')) {
                            the_row();
                            $url = get_sub_field('url');
                            $text = get_sub_field('text');
                            ?>
                            <li><a href="<?= $url; ?>"><?= $text; ?></a></li>
                        <?php
                        }
                    }
                    ?>
                </ul>
            </nav>
        </section>
        <section class="f-third">
            <h2><?= get_field('f-third-title'); ?></h2>
            <nav>
                <h3 class="hidden"><?= get_field('f-third-title'); ?></h3>
                <ul class="f-horaire">
                    <?php if (have_rows('f-third-links')) {
                        while (have_rows('f-third-links')) {
                            the_row();
                            $text = get_sub_field('text');
                            ?>
                            <li><?= $text; ?></li>
                        <?php
                        }
                    }
                    ?>
                </ul>
            </nav>
        </section>
        <section class="f-full">
            <h2 class="hidden">Informations pour les donateurs</h2>
            <div class="bg-footer-top">
                <h3>Informations pour les donateurs</h3>
                <div class="donor-info">
                    <p>
                        Numéro de compte&nbsp;:<br>
                        <span>BE 59 0018 4105 2926<img src="<?= get_field('clipboard'); ?>" alt=""></span>
                    </p>
                    <p>
                        Numéro de téléphone&nbsp;:<br><span>+32 (0)493 71 87 37</span>
                    </p>
                </div>
                <p class="cta-small">
                    Visiter la <a href="/fr/donations">page de dons</a> pour plus d’informations
                </p>
            </div>
            <div class="f-links">
                <h3 class="hidden">Liens utiles</h3>
                    <?php
                    if (have_rows('f-donation-info')) {
                        $total_rows = count(get_field('f-donation-info'));
                        $counter = 0;

                        while (have_rows('f-donation-info')) {
                            the_row();
                            $url = get_sub_field('url');
                            $text = get_sub_field('text');
                            $image = get_sub_field('image');
                            $counter++;
                            ?>

                            <a href="<?= $url ?>" <?php if ($counter === $total_rows) echo 'class="facebook"'; ?>>
                                <span><?= $text ?></span>
                                <img src="<?= $image; ?>" alt="">
                            </a>
                        <?php
                        }
                    }
                    ?>
            </div>
            <p class="copyright">
                © 2023 <a href="/accueil" title="Retourner à l'accueil"><?= get_bloginfo('name'); ?></a> ASBL Vielsam&nbsp;-&nbsp;Réalisé par Renaud Van Meerbergen
            </p>
            <div class="bg-footer-bottom"></div>
        </section>
    </footer>
    <?php
        if (is_page('contact')) {
            echo '<script src="' . get_stylesheet_directory_uri() . '/public/js/form.js"></script>';
        } else {
            echo '<script src="' . get_stylesheet_directory_uri() . '/public/js/site.js"></script>';
        }
    ?>
</body>
</html>