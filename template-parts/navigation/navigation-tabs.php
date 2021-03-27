<?php
if (get_theme_mod('display_nav_tabs', true) === true) {
    wp_nav_menu(
        array(
            'theme_location' => 'nav-tabs',
            'container' => 'nav',
            'menu_class' => 'nav-tabs'
        )
    );
}
