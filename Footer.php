<footer class="nc-footer">
    <div class="container">
        <div class="row g-4">

            <div class="col-md-6 col-lg-4">
                <h4>Noura Couture</h4>

                <p>
                    Confection, couture, retouche et créations personnalisées
                    pour femme, homme et enfant.
                </p>

                <a
                    class="nc-btn-outline-light mt-2"
                    href="https://wa.me/213555123456?text=Bonjour%20Noura%20Couture%2C%20je%20souhaite%20avoir%20des%20informations."
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    Contacter sur WhatsApp
                </a>
            </div>

            <div class="col-6 col-lg-2">
                <h4>Boutique</h4>

                <ul class="nc-footer-list">
                    <li>
                        <a href="<?php echo esc_url(home_url('/categorie-produit/enfant/')); ?>">
                            Enfant
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo esc_url(home_url('/categorie-produit/femme/')); ?>">
                            Femme
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo esc_url(home_url('/categorie-produit/homme/')); ?>">
                            Homme
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo esc_url(home_url('/categorie-produit/adultes/')); ?>">
                            Adultes
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo esc_url(home_url('/categorie-produit/promotions/')); ?>">
                            Promotions
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-6 col-lg-2">
                <h4>Services</h4>

                <ul class="nc-footer-list">
                    <li>
                        <a href="<?php echo esc_url(home_url('/devis-sur-mesure/')); ?>">
                            Sur mesure
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo esc_url(home_url('/services/')); ?>">
                            Retouche
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo esc_url(home_url('/services/')); ?>">
                            Uniformes
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-md-6 col-lg-4">
                <h4>Contact</h4>

                <p class="mb-2">
                    <strong>Adresse :</strong><br>
                    Bab Ezzouar, Alger, Algérie
                </p>

                <p class="mb-2">
                    <strong>Téléphone :</strong><br>
                    <a href="tel:+213555123456">
                        +213 555 12 34 56
                    </a>
                </p>

                <p class="mb-0">
                    <strong>Email :</strong><br>
                    <a href="mailto:contact@noura-couture.com">
                        contact@noura-couture.com
                    </a>
                </p>
            </div>

        </div>

        <div class="nc-footer-bottom d-flex flex-column flex-md-row justify-content-between gap-2">
            <span>
                © <?php echo esc_html(date('Y')); ?> Noura Couture. Tous droits réservés.
            </span>

            <span>
                <a href="<?php echo esc_url(home_url('/politique-de-confidentialite/')); ?>">
                    Confidentialité
                </a>

                &nbsp; | &nbsp;

                <a href="<?php echo esc_url(home_url('/conditions-generales/')); ?>">
                    Conditions générales
                </a>
            </span>
        </div>
    </div>
</footer>

<a
    class="nc-whatsapp-float"
    href="https://wa.me/213555123456?text=Bonjour%20Noura%20Couture%2C%20je%20souhaite%20avoir%20des%20informations."
    target="_blank"
    rel="noopener noreferrer"
    aria-label="Contacter Noura Couture sur WhatsApp"
    title="Contacter Noura Couture sur WhatsApp"
>
    WhatsApp
</a>

<?php wp_footer(); ?>

</body>
</html>