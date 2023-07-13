<!-- Footer section-->
    <footer role="contentinfo" class="footer" tabindex="-1">
        <nav aria-label="Footer">
            <h2 role="heading" aria-level="2" class="hidden">Menu de navigation du bas de page</h2>
            <ul>
                <li>
                    <?= get_field('footer-title1', 'option'); ?>
                    <ul class="navigation">
                        <?php if (have_rows('footer-links1', 'option')) {
                            while (have_rows('footer-links1', 'option')) {
                                the_row();
                                $url = get_sub_field('url');
                                $text = get_sub_field('text');
                                ?>
                                <li><a href="<?= $url; ?>" class="cta-border"><?= $text; ?></a></li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                </li>
                <li class="c">
                    <?= get_field('footer-title2', 'option'); ?>
                    <ul class="contributions">
                        <?php if (have_rows('footer-links2', 'option')) {
                            while (have_rows('footer-links2', 'option')) {
                                the_row();
                                $url = get_sub_field('url');
                                $text = get_sub_field('text');
                                ?>
                                <li><a href="<?= $url; ?>" class="cta-border"><?= $text; ?></a></li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                </li>
                <li>
                    <?= get_field('footer-title3', 'option'); ?>
                    <ul class="horaire">
                        <?php if (have_rows('footer-links3', 'option')) {
                            while (have_rows('footer-links3', 'option')) {
                                the_row();
                                $text = get_sub_field('text');
                                ?>
                                <li><?= $text; ?></li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                </li>
            </ul>
            <div class="footer__bottom">
                <div class="donor">
                    <span>Informations pour les donateurs</span>
                    <div class="donor__info">
                        <p>
                            Numéro de compte&nbsp;:<br>
                            <span>BE 59 0018 4105 2926</span>
                        </p>
                        <p>
                            Numéro de téléphone&nbsp;:<br><span>+32 (0)493 71 87 37</span>
                        </p>
                    </div>
                    <div class="donor__cta">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                            <g transform="translate(1 1)">
                                <path d="M19,11a8,8,0,1,1-8-8,8,8,0,0,1,8,8Z" transform="translate(-3 -3)" fill="none" stroke="#3a3d55" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                <path d="M18,21.2V18" transform="translate(-10 -10)" fill="none" stroke="#3a3d55" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                <path d="M18,12h0" transform="translate(-10 -7.2)" fill="none" stroke="#3a3d55" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                            </g>
                        </svg>
                        <p>Visitez la <a href="<?= get_home_url() . "/donations"; ?>" title="Vers la page de dons">page de dons</a> pour plus d’informations</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 17.999 16">
                            <path d="M17.5,7h-.922A5.016,5.016,0,0,0,15.41,5.36L16,3H15A2.981,2.981,0,0,0,12.72,4.072,4.956,4.956,0,0,0,12,4H8A5,5,0,0,0,3.1,8H1.751a.751.751,0,0,1-.734-.9.77.77,0,0,1,.766-.6h.031A.188.188,0,0,0,2,6.313V5.688A.188.188,0,0,0,1.813,5.5a1.79,1.79,0,0,0-1.8,1.519A1.751,1.751,0,0,0,1.751,9H3a4.98,4.98,0,0,0,2,3.978V15.5a.5.5,0,0,0,.5.5h2a.5.5,0,0,0,.5-.5V14h4v1.5a.5.5,0,0,0,.5.5h2a.5.5,0,0,0,.5-.5V12.979A5,5,0,0,0,15.979,12H17.5a.5.5,0,0,0,.5-.5v-4A.5.5,0,0,0,17.5,7Zm-4,2a.5.5,0,1,1,.5-.5A.5.5,0,0,1,13.5,9ZM8,3h4c.169,0,.334.013.5.025,0-.009,0-.016,0-.025a3,3,0,1,0-6,0c0,.066.016.128.019.194A5.94,5.94,0,0,1,8,3Z" transform="translate(-0.002)" fill="#f86363"/>
                        </svg>
                    </div>
                </div>
                <div class="dons">
                    <span>Dons</span>
                    <a href="<?= get_home_url() . "/donations"; ?>" title="Vers la page de dons" target="_blank">
                        <img src="<?= get_field("footer-bottom-link1", 'option'); ?>" alt="qr-code" target="_blank">
                    </a>
                </div>
                <div class="address">
                    <span>Adresse</span>
                    <a href="https://goo.gl/maps/pcbU3Nr1J4nSoixUA" title="Voir l'adresse sur Google Maps">
                        <img src="<?= get_field("footer-bottom-link2", 'option'); ?>" alt="icône d'une carte de localisation">
                    </a>
                </div>
                <div class="facebook">
                    <span class="hidden">Facebook</span>
                    <a href="https://www.facebook.com/clinicoeurs.asbl" title="Vers la page Facebook de l'asbl" target="_blank">
                        <img src="<?= get_field("footer-bottom-link3", 'option'); ?>" alt="logo de Facebook">
                    </a>
                </div>
            </div>
            <p class="copyright">
                © 2023 <a href="<?= get_home_url() . '/accueil'; ?> " class="cta-border" title="Retourner à l'accueil"><?= get_bloginfo('name'); ?></a>. Réalisé par Renaud Van Meerbergen.
            </p>
            <div class="bg-footer-bottom"></div>
        </nav>
    </footer>
    <?php
        if (is_page('contact')) {
            echo '<script src="' . get_stylesheet_directory_uri() . '/public/js/form.js"></script>';
        } elseif (is_page('services')) {
            echo '<script src="' . get_stylesheet_directory_uri() . '/public/js/services.js"></script>';
        } else {
            echo '<script src="' . get_stylesheet_directory_uri() . '/public/js/site.js"></script>';
        }
    ?>
</body>
</html>