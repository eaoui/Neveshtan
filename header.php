<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="designer" content="Neveshtan contributors on Github, https://github.com/eaoui/Neveshtan/graphs/contributors">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>

    <?php
    // Color Scheme
    if (get_option('color_scheme') === 'brown') {
        $midcolor = '#795548';
        $darkcolor = '#3e2723';
        $lightcolor = '#d7ccc8';
    } elseif (get_option('color_scheme') === 'amber') {
        $midcolor = '#ffc107';
        $darkcolor = '#ff6f00';
        $lightcolor = '#ffecb3';
    } elseif (get_option('color_scheme') === 'green') {
        $midcolor = '#4caf50';
        $darkcolor = '#1b5e20';
        $lightcolor = '#c8e6c9';
    } elseif (get_option('color_scheme') === 'cyan') {
        $midcolor = '#00bcd4';
        $darkcolor = '#006064';
        $lightcolor = '#b2ebf2';
    } elseif (get_option('color_scheme') === 'light_blue') {
        $midcolor = '#03a9f4';
        $darkcolor = '#01579b';
        $lightcolor = '#b3e5fc';
    } elseif (get_option('color_scheme') === 'indigo') {
        $midcolor = '#3f51b5';
        $darkcolor = '#1a237e';
        $lightcolor = '#c5cae9';
    } elseif (get_option('color_scheme') === 'purple') {
        $midcolor = '#9c27b0';
        $darkcolor = '#4a148c';
        $lightcolor = '#e1bee7';
    } elseif (get_option('color_scheme') === 'pink') {
        $midcolor = '#e91e63';
        $darkcolor = '#880e4f';
        $lightcolor = '#f8bbd0';
    } elseif (get_option('color_scheme') === 'red') {
        $midcolor = '#f44336';
        $darkcolor = '#b71c1c';
        $lightcolor = '#ffcdd2';
    } else {
        $midcolor = '#607d8b';
        $darkcolor = '#263238';
        $lightcolor = '#cfd8dc';
    }

    if (get_option('header_position') === 'sticky') {
        $header_position = 'sticky';
    } else {
        $header_position = 'relative';
    }
    ?>

    <meta name="theme-color" content="<?php echo $darkcolor; ?>">
    <meta name="msapplication-TileColor" content="<?php echo $darkcolor; ?>">
    <meta name="msapplication-navbutton-color" content="<?php echo $darkcolor; ?>">
    <meta name="apple-mobile-web-app-status-bar-style" content="<?php echo $darkcolor; ?>">

    <style>
        header {
            background-color: <?php echo $darkcolor; ?>;
            position: <?php echo $header_position; ?> !important;
        }

        header .site-title {
            color: <?php echo $lightcolor; ?>;
        }

        header #menu,
        header #search {
            fill: <?php echo $lightcolor; ?>;
        }

        main article .bottom .read-more {
            background-color: <?php echo $darkcolor; ?>;
        }

        footer {
            background-color: <?php echo $darkcolor; ?>;
            color: <?php echo $lightcolor; ?>;
        }

        footer .backtotop {
            background-color: <?php echo $midcolor; ?>;
            fill: <?php echo $lightcolor; ?>;
        }

        footer h6 {
            color: <?php echo $lightcolor; ?>;
        }
    </style>

</head>

<body>
    <header class="sticky">
        <?php
        if (function_exists('the_custom_logo')) {
            the_custom_logo();
        }
        ?>
        <?php if (get_theme_mod('display_title', true) === true) : ?>
            <a class="site-title" href="<?php echo esc_url(home_url()) ?>" title="<?php bloginfo('description'); ?>">
                <?php bloginfo('name'); ?>
            </a>
        <?php endif; ?>
        <svg id="menu" viewBox="0 0 24 24" onclick="showHide('navigation-drawer', 'nav-back'); toggleMenuIcon();">
            <path d="M0 0h24v24H0z" fill="none" />
            <g id="close-icon">
                <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z" />
            </g>
            <g id="menu-icon">
                <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z" />
            </g>
        </svg>
        <?php if (get_theme_mod('display_search', true) === true) : ?>
            <svg id="search" viewBox="0 0 24 24" onclick="showHide('search-box', 'search-back'); focusOn('s')">
                <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                <path d="M0 0h24v24H0z" fill="none" />
            </svg>
            <div class="search-box" id="search-box">
                <?php get_search_form(); ?>
            </div>
        <?php endif; ?>
    </header>
    <nav class="nav-drawer" id="navigation-drawer">
        <?php if (get_theme_mod('display_user_panel', true) === true) : ?>
            <?php if (is_user_logged_in()) : ?>
                <ul class="user-panel">
                    <li>
                        <a href="<?php echo get_edit_profile_url(); ?>" title="<?php esc_html_e('Edit Profile', 'neveshtan'); ?>">
                            <?php echo get_avatar(wp_get_current_user()->user_id, 24); ?>
                            <?php echo wp_get_current_user()->display_name; ?>
                        </a>
                    </li>
                    <?php if (current_user_can('administrator') || current_user_can('editor') || current_user_can('author') || current_user_can('contributor')) : ?>
                        <li>
                            <a href="<?php echo get_dashboard_url(); ?>" title="<?php esc_html_e('Go to WordPress admin panel', 'neveshtan'); ?>">
                                <svg viewBox="0 0 24 24">
                                    <path d="M11.99 2C6.474 2 2 6.473 2 11.99c0 5.518 4.473 9.991 9.99 9.991c5.518 0 9.991-4.473 9.991-9.99c0-5.518-4.473-9.991-9.99-9.991zm-8.562 9.99c0-1.208.268-2.357.742-3.394l4.085 10.9c-2.857-1.351-4.827-4.205-4.827-7.505zm8.564 8.343a8.87 8.87 0 0 1-2.42-.339l2.57-7.273l2.63 7.024l.06.116a8.77 8.77 0 0 1-2.84.472zM13.168 8.08c.515-.027.98-.08.98-.08c.461-.053.408-.712-.053-.687c0 0-1.388.106-2.284.106c-.84 0-2.256-.106-2.256-.106c-.462-.026-.515.66-.055.688c0 0 .438.052.898.079l1.335 3.56l-1.874 5.475l-3.117-9.034c.517-.026.98-.079.98-.079c.46-.054.407-.713-.054-.688c0 0-1.387.106-2.281.106l-.551-.01c1.53-2.264 4.162-3.76 7.153-3.76c2.23 0 4.259.83 5.784 2.19l-.112-.008c-.841 0-1.437.713-1.437 1.48c0 .688.406 1.268.84 1.956c.329.557.706 1.27.706 2.3c0 .714-.28 1.542-.65 2.698l-.856 2.779l-3.096-8.965zm3.127 11.117l2.617-7.365c.49-1.19.65-2.14.65-2.987c0-.307-.02-.592-.056-.858a8.155 8.155 0 0 1 1.049 4.003c-.001 3.077-1.713 5.763-4.26 7.207z" />
                                </svg>
                                <?php esc_html_e('Dashboard', 'neveshtan'); ?>
                            </a>
                        </li>
                    <?php else : ?>
                        <li>
                            <a href="<?php echo wp_logout_url(); ?>" title="<?php esc_html_e('Log out of current account', 'neveshtan'); ?>">
                                <svg viewBox="0 0 24 24">
                                    <path d="M17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5zM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4V5z" />
                                </svg>
                                <?php esc_html_e('Logout', 'neveshtan'); ?>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            <?php else : ?>
                <ul class="user-panel">
                    <li>
                        <a href="<?php echo wp_login_url(); ?>" title="<?php esc_html_e('Log into your existing account', 'neveshtan'); ?>">
                            <svg viewBox="0 0 24 24">
                                <path d="M11,7L9.6,8.4l2.6,2.6H2v2h10.2l-2.6,2.6L11,17l5-5L11,7z M20,19h-8v2h8c1.1,0,2-0.9,2-2V5c0-1.1-0.9-2-2-2h-8v2h8V19z" />
                            </svg>
                            <?php esc_html_e('Login', 'neveshtan'); ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo wp_registration_url(); ?>" title="<?php esc_html_e('Register a new account', 'neveshtan'); ?>">
                            <svg viewBox="0 0 24 24">
                                <path d="M15 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm-9-2V7H4v3H1v2h3v3h2v-3h3v-2H6zm9 4c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                            </svg>
                            <?php esc_html_e('Register', 'neveshtan'); ?>
                        </a>
                    </li>
                </ul>
            <?php endif; ?>
        <?php endif; ?>
        <?php wp_nav_menu(array(
            'theme_location' => 'drawer-nav-menu',
            'container' => 'ul'
        )); ?>
    </nav>
    <div class="darken" id="nav-back" onclick="showHide('navigation-drawer', 'nav-back'); toggleMenuIcon()"></div>
    <div class="darken" id="search-back" onclick="showHide('search-box', 'search-back')"></div>