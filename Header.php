<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="nc-topbar">
    <div class="container">
        <div class="nc-topbar-content">
            <div class="nc-topbar-left">
                <span>Confection et couture sur mesure</span>
                <span>Livraison disponible</span>
            </div>

            <div class="nc-topbar-right">
                <a
                    href="https://wa.me/213555123456"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    WhatsApp : +213 555 12 34 56
                </a>

                <a href="tel:+213555123456">
                    Téléphone : +213 555 12 34 56
                </a>
            </div>
        </div>
    </div>
</div>

<header class="nc-header">
    <nav class="navbar navbar-expand-lg nc-navbar">
        <div class="container">

            <a class="nc-brand" href="<?php echo esc_url(home_url('/')); ?>">
                Noura Couture
            </a>

            <div class="d-flex d-lg-none gap-2 align-items-center ms-auto">
                <a
                    class="nc-header-icon"
                    href="<?php echo esc_url(noura_couture_cart_url()); ?>"
                    aria-label="Panier"
                >
                    🛒
                    <span class="nc-cart-count">
                        <?php echo esc_html(noura_couture_cart_count()); ?>
                    </span>
                </a>

                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#nouraMainMenu"
                    aria-controls="nouraMainMenu"
                    aria-expanded="false"
                    aria-label="Ouvrir le menu"
                >
                    ☰
                </button>
            </div>

            <div class="collapse navbar-collapse" id="nouraMainMenu">

                <div class="mx-lg-auto">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        'menu_class'     => 'navbar-nav nc-menu',
                        'fallback_cb'    => 'noura_couture_default_menu'
                    ));
                    ?>
                </div>

                <form
                    class="nc-search-form"
                    role="search"
                    method="get"
                    action="<?php echo esc_url(home_url('/')); ?>"
                >
                    <input
                        type="search"
                        name="s"
                        value="<?php echo esc_attr(get_search_query()); ?>"
                        placeholder="Rechercher un article..."
                        aria-label="Rechercher un article"
                    >

                    <input type="hidden" name="post_type" value="product">

                    <button type="submit" aria-label="Lancer la recherche">
                        🔎
                    </button>
                </form>

                <div class="nc-header-icons ms-lg-3 d-none d-lg-flex">
                    <a
                        class="nc-header-icon"
                        href="<?php echo esc_url(noura_couture_account_url()); ?>"
                        aria-label="Mon compte"
                        title="Mon compte"
                    >
                        ♙
                    </a>

                    <a
                        class="nc-header-icon"
                        href="<?php echo esc_url(noura_couture_cart_url()); ?>"
                        aria-label="Panier"
                        title="Panier"
                    >
                        🛒
                        <span class="nc-cart-count">
                            <?php echo esc_html(noura_couture_cart_count()); ?>
                        </span>
                    </a>
                </div>

            </div>
        </div>
    </nav>
</header>