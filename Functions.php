<?php

defined('ABSPATH') || exit;

/*
|--------------------------------------------------------------------------
| Chargement CSS et JavaScript
|--------------------------------------------------------------------------
*/

add_action('wp_enqueue_scripts', 'noura_couture_enqueue_assets');

function noura_couture_enqueue_assets() {
    wp_enqueue_style(
        'bootstrap-css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
        array(),
        '5.3.3'
    );

    wp_enqueue_style(
        'noura-couture-style',
        get_stylesheet_uri(),
        array('bootstrap-css'),
        '1.0.0'
    );

    wp_enqueue_style(
        'noura-couture-app-css',
        get_template_directory_uri() . '/assets/css/app.css',
        array('noura-couture-style'),
        '1.0.0'
    );

    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
        array(),
        '5.3.3',
        true
    );

    wp_enqueue_script(
        'noura-couture-app-js',
        get_template_directory_uri() . '/assets/js/app.js',
        array('bootstrap-js'),
        '1.0.0',
        true
    );
}

/*
|--------------------------------------------------------------------------
| Configuration du thème
|--------------------------------------------------------------------------
*/

add_action('after_setup_theme', 'noura_couture_theme_setup');

function noura_couture_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('woocommerce');

    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ));

    register_nav_menus(array(
        'primary' => __('Menu principal', 'noura-couture'),
        'footer'  => __('Menu footer', 'noura-couture')
    ));
}

/*
|--------------------------------------------------------------------------
| Fonction panier WooCommerce
|--------------------------------------------------------------------------
*/

function noura_couture_cart_count() {
    if (!class_exists('WooCommerce')) {
        return 0;
    }

    if (!function_exists('WC') || !WC()->cart) {
        return 0;
    }

    return WC()->cart->get_cart_contents_count();
}

function noura_couture_cart_url() {
    if (function_exists('wc_get_cart_url')) {
        return wc_get_cart_url();
    }

    return home_url('/');
}

function noura_couture_account_url() {
    if (function_exists('wc_get_page_permalink')) {
        return wc_get_page_permalink('myaccount');
    }

    return wp_login_url();
}

function noura_couture_shop_url() {
    if (function_exists('wc_get_page_permalink')) {
        return wc_get_page_permalink('shop');
    }

    return home_url('/');
}
function noura_couture_default_menu() {
    echo '<ul class="navbar-nav nc-menu">';
    echo '<li class="nav-item"><a class="nav-link" href="' . esc_url(home_url('/')) . '">Accueil</a></li>';
    echo '<li class="nav-item"><a class="nav-link" href="' . esc_url(noura_couture_shop_url()) . '">Boutique</a></li>';
    echo '<li class="nav-item"><a class="nav-link" href="' . esc_url(home_url('/services/')) . '">Services</a></li>';
    echo '<li class="nav-item"><a class="nav-link" href="' . esc_url(home_url('/categorie-produit/promotions/')) . '">Promotions</a></li>';
    echo '<li class="nav-item"><a class="nav-link" href="' . esc_url(home_url('/contact/')) . '">Contact</a></li>';
    echo '</ul>';
}