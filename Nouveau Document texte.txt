<?php get_header(); ?>

<main id="main-content">

    <!-- CARROUSEL CENTRAL -->
    <section class="nc-hero-carousel">
        <div
            id="nouraHeroCarousel"
            class="carousel slide carousel-fade"
            data-bs-ride="carousel"
        >
            <div class="carousel-indicators">
                <button
                    type="button"
                    data-bs-target="#nouraHeroCarousel"
                    data-bs-slide-to="0"
                    class="active"
                    aria-current="true"
                    aria-label="Slide 1"
                ></button>

                <button
                    type="button"
                    data-bs-target="#nouraHeroCarousel"
                    data-bs-slide-to="1"
                    aria-label="Slide 2"
                ></button>

                <button
                    type="button"
                    data-bs-target="#nouraHeroCarousel"
                    data-bs-slide-to="2"
                    aria-label="Slide 3"
                ></button>
            </div>

            <div class="carousel-inner">

                <!-- Slide 1 -->
                <div class="carousel-item active" data-bs-interval="6000">
                    <div
                        class="nc-hero-slide"
                        style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/hero-1.jpg');"
                    >
                        <div class="container">
                            <div class="nc-hero-content">
                                <span class="nc-hero-subtitle">Noura Couture</span>

                                <h1 class="nc-hero-title">
                                    L’élégance cousue pour vous
                                </h1>

                                <p class="nc-hero-description">
                                    Découvrez nos créations pour femme, homme, enfant et nos pièces réalisées avec soin.
                                </p>

                                <div class="nc-hero-buttons">
                                    <a
                                        class="nc-btn-primary"
                                        href="<?php echo esc_url(noura_couture_shop_url()); ?>"
                                    >
                                        Découvrir la boutique
                                    </a>

                                    <a
                                        class="nc-btn-outline-light"
                                        href="<?php echo esc_url(home_url('/devis-sur-mesure/')); ?>"
                                    >
                                        Demander un devis
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" data-bs-interval="6000">
                    <div
                        class="nc-hero-slide"
                        style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/hero-2.jpg');"
                    >
                        <div class="container">
                            <div class="nc-hero-content">
                                <span class="nc-hero-subtitle">Création personnalisée</span>

                                <h2 class="nc-hero-title">
                                    Votre tenue sur mesure
                                </h2>

                                <p class="nc-hero-description">
                                    Robes, caftans, costumes, uniformes et tenues de cérémonie adaptées à votre style.
                                </p>

                                <div class="nc-hero-buttons">
                                    <a
                                        class="nc-btn-primary"
                                        href="<?php echo esc_url(home_url('/devis-sur-mesure/')); ?>"
                                    >
                                        Créer ma tenue
                                    </a>

                                    <a
                                        class="nc-btn-outline-light"
                                        href="<?php echo esc_url(home_url('/services/')); ?>"
                                    >
                                        Voir les services
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" data-bs-interval="6000">
                    <div
                        class="nc-hero-slide"
                        style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/hero-3.jpg');"
                    >
                        <div class="container">
                            <div class="nc-hero-content">
                                <span class="nc-hero-subtitle">Promotions</span>

                                <h2 class="nc-hero-title">
                                    Jusqu’à -30 % sur une sélection
                                </h2>

                                <p class="nc-hero-description">
                                    Découvrez les promotions disponibles sur une sélection de vêtements et créations.
                                </p>

                                <div class="nc-hero-buttons">
                                    <a
                                        class="nc-btn-primary"
                                        href="<?php echo esc_url(home_url('/categorie-produit/promotions/')); ?>"
                                    >
                                        Voir les promotions
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#nouraHeroCarousel"
                data-bs-slide="prev"
                aria-label="Slide précédent"
            >
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>

            <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#nouraHeroCarousel"
                data-bs-slide="next"
                aria-label="Slide suivant"
            >
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>
    </section>

    <!-- CATÉGORIES -->
    <section class="nc-section">
        <div class="container">
            <div class="nc-section-heading">
                <span>Nos collections</span>
                <h2>Une collection pour chaque style</h2>
                <p>
                    Découvrez les collections Noura Couture pour enfant, femme, homme et adultes.
                </p>
            </div>

            <div class="row g-4">

                <div class="col-6 col-lg-3">
                    <a
                        class="nc-category-card"
                        href="<?php echo esc_url(home_url('/categorie-produit/enfant/')); ?>"
                    >
                        <img
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/category-enfant.jpg"
                            alt="Collection enfant Noura Couture"
                        >

                        <div class="nc-category-label">
                            <h3>Enfant</h3>
                            <span>Découvrir →</span>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-lg-3">
                    <a
                        class="nc-category-card"
                        href="<?php echo esc_url(home_url('/categorie-produit/femme/')); ?>"
                    >
                        <img
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/category-femme.jpg"
                            alt="Collection femme Noura Couture"
                        >

                        <div class="nc-category-label">
                            <h3>Femme</h3>
                            <span>Découvrir →</span>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-lg-3">
                    <a
                        class="nc-category-card"
                        href="<?php echo esc_url(home_url('/categorie-produit/homme/')); ?>"
                    >
                        <img
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/category-homme.jpg"
                            alt="Collection homme Noura Couture"
                        >

                        <div class="nc-category-label">
                            <h3>Homme</h3>
                            <span>Découvrir →</span>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-lg-3">
                    <a
                        class="nc-category-card"
                        href="<?php echo esc_url(home_url('/categorie-produit/adultes/')); ?>"
                    >
                        <img
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/category-adultes.jpg"
                            alt="Collection adultes Noura Couture"
                        >

                        <div class="nc-category-label">
                            <h3>Adultes</h3>
                            <span>Découvrir →</span>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section class="nc-section nc-section-muted">
        <div class="container">
            <div class="nc-section-heading">
                <span>Notre savoir-faire</span>
                <h2>Services de confection et couture</h2>
                <p>
                    De la retouche simple à la création complète, nous vous accompagnons dans votre projet.
                </p>
            </div>

            <div class="row g-4">

                <div class="col-md-6 col-lg-3">
                    <article class="nc-service-card">
                        <div class="nc-service-icon">✂</div>
                        <h3>Sur mesure</h3>
                        <p>
                            Créations adaptées à vos mensurations, votre style et votre événement.
                        </p>
                    </article>
                </div>

                <div class="col-md-6 col-lg-3">
                    <article class="nc-service-card">
                        <div class="nc-service-icon">⌁</div>
                        <h3>Retouche</h3>
                        <p>
                            Ajustement, ourlet, réparation, fermeture éclair et transformation de vêtements.
                        </p>
                    </article>
                </div>

                <div class="col-md-6 col-lg-3">
                    <article class="nc-service-card">
                        <div class="nc-service-icon">▣</div>
                        <h3>Uniformes</h3>
                        <p>
                            Tenues pour entreprises, écoles, associations, salons et équipes.
                        </p>
                    </article>
                </div>

                <div class="col-md-6 col-lg-3">
                    <article class="nc-service-card">
                        <div class="nc-service-icon">✦</div>
                        <h3>Événements</h3>
                        <p>
                            Tenues de mariage, fiançailles, cérémonies, fêtes et occasions spéciales.
                        </p>
                    </article>
                </div>

            </div>

            <div class="mt-5 text-center">
                <a
                    class="nc-btn-primary"
                    href="<?php echo esc_url(home_url('/devis-sur-mesure/')); ?>"
                >
                    Demander un devis sur mesure
                </a>
            </div>
        </div>
    </section>

    <!-- PRODUITS -->
    <section class="nc-section">
        <div class="container">
            <div class="nc-section-heading">
                <span>Dernières créations</span>
                <h2>Nouveautés Noura Couture</h2>
                <p>
                    Découvrez les derniers articles ajoutés à notre boutique.
                </p>
            </div>

            <?php
            if (class_exists('WooCommerce')) {
                echo do_shortcode(
                    '[products limit="4" columns="4" orderby="date" order="DESC" visibility="visible"]'
                );
            } else {
                echo '<p class="text-center">Installez WooCommerce pour afficher les produits.</p>';
            }
            ?>

            <div class="mt-5 text-center">
                <a
                    class="nc-btn-outline-dark"
                    href="<?php echo esc_url(noura_couture_shop_url()); ?>"
                >
                    Voir toute la boutique
                </a>
            </div>
        </div>
    </section>

    <!-- PROMOTION -->
    <section class="nc-promo">
        <div class="container">
            <div class="nc-promo-content">
                <span>Offre spéciale</span>

                <h2>Jusqu’à -30 % sur une sélection</h2>

                <p class="mb-4">
                    Profitez des offres sur certains modèles, selon le stock disponible.
                </p>

                <a
                    class="nc-btn-outline-light"
                    href="<?php echo esc_url(home_url('/categorie-produit/promotions/')); ?>"
                >
                    Découvrir les promotions
                </a>
            </div>
        </div>
    </section>

    <!-- STATISTIQUES -->
    <section class="nc-section">
        <div class="container">
            <div class="row g-4">

                <div class="col-6 col-lg-3">
                    <div class="nc-stat">
                        <span class="nc-stat-number">4</span>
                        <span class="nc-stat-label">Collections principales</span>
                    </div>
                </div>

                <div class="col-6 col-lg-3">
                    <div class="nc-stat">
                        <span class="nc-stat-number">100%</span>
                        <span class="nc-stat-label">Finitions soignées</span>
                    </div>
                </div>

                <div class="col-6 col-lg-3">
                    <div class="nc-stat">
                        <span class="nc-stat-number">24h</span>
                        <span class="nc-stat-label">Réponse aux demandes</span>
                    </div>
                </div>

                <div class="col-6 col-lg-3">
                    <div class="nc-stat">
                        <span class="nc-stat-number">∞</span>
                        <span class="nc-stat-label">Créations sur mesure</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>