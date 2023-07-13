<section class="contact" id="contact" aria-label="Section du formulaire de contact">
    <div class="contact__container">
        <span class="contact__span"><?= get_field("contact-span"); ?></span>
        <h2 class="contact__title" role="heading" aria-level="2"><?= get_field('contact-title'); ?></h2>
        <p class="contact__text"><?= get_field('contact-text'); ?></p>
        <?php
        $feedback = hepl_session_get('hepl_contact_form_feedback') ?? false;
        $errors = hepl_session_get('hepl_contact_form_errors') ?? [];
        ?>

        <?php if ($feedback): ?>
            <div class="success">
                <p><?= get_field('success-message'); ?></p>
            </div>
        <?php else: ?>
            <form action="<?= esc_url(admin_url('admin-post.php')); ?>" method="POST" class="contact__form">
                <?php if ($errors): ?>
                    <div class="error">
                        <img src="<?= get_field('clown-icon'); ?>" alt="emoji de clown">
                        <p><?= get_field('error-message'); ?></p>
                    </div>
                <?php endif; ?>
                <fieldset class="contact__info">
                    <div class="contact__info__field">
                        <label for="nom" class="field__label">Nom<span style="color: #ff3e3e">*</span></label>
                        <input type="text" name="nom" id="nom" class="field__input" placeholder="Lepont"/>
                        <?php if ($errors['nom'] ?? null): ?>
                            <p class="field__error"><?= $errors['nom']; ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="contact__info__field">
                        <label for="prénom" class="field__label">Prénom<span style="color: #ff3e3e">*</span></label>
                        <input type="text" name="prénom" id="prénom" class="field__input" placeholder="John"/>
                        <?php if ($errors['prénom'] ?? null): ?>
                            <p class="field__error"><?= $errors['prénom']; ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="contact__info__field">
                        <label for="email" class="field__label">Adresse mail<span style="color: #ff3e3e">*</span></label>
                        <input type="email" name="email" id="email" class="field__input" placeholder="john.lepont@gmail.com" autocomplete="" />
                        <?php if ($errors['email'] ?? null): ?>
                            <p class="field__error"><?= $errors['email']; ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="contact__info__field">
                        <label for="téléphone" class="field__label">Numéro de téléphone<span style="color: #ff3e3e">*</span></label>
                        <input type="tel" name="téléphone" id="téléphone" class="field__input" placeholder="+32 470 59 61 62"/>
                        <?php if ($errors['téléphone'] ?? null): ?>
                            <p class="field__error"><?= $errors['téléphone']; ?></p>
                        <?php endif; ?>
                    </div>
                </fieldset>
                <fieldset class="contact__info-2">
                    <div class="contact__info__user">
                        <h3 role="heading" aria-level="3">Vous êtes un(e) potentiel(le)</h3>
                        <?php
                        $roles = array(
                            'volunteer' => 'bénévole',
                            'sponsor' => 'partenaire',
                            'donor' => 'donateur',
                            'other' => 'autre'
                        );
                        foreach ($roles as $key => $value) {
                            ?>
                            <div>
                                <input type="radio" id="<?php echo $key; ?>" name="role">
                                <label for="<?php echo $key; ?>"><?php echo $value; ?></label>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="contact__info__field">
                        <label for="message" class="field__label">Message<span style="color: #ff3e3e">*</span></label>
                        <textarea name="message" id="message" class="field__textarea" rows="5" placeholder="Veuillez écrire votre message…"></textarea>
                        <?php if ($errors['message'] ?? null): ?>
                            <p class="field__error"><?= $errors['message']; ?></p>
                        <?php endif; ?>
                    </div>
                </fieldset>
                <div class="contact__footer">
                    <input type="hidden" name="action" value="hepl_contact_form" />
                    <input type="hidden" name="contact_nonce" value="<?= wp_create_nonce('hepl_contact_form'); ?>" />
                    <button type="submit" class="contact__submit">
                        <span class="left"><img src="<?= get_field('contact-icon'); ?>" alt="icône d'une enveloppe"></span>
                        <span>Envoyer le message</span>
                    </button>
                </div>
            </form>
        <?php endif; ?>
    </div>
    <div class="bg-contact-form"></div>
</section>