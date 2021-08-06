<?php
// This file contain the content for: Appearance > Customize

function neveshtan_customize_register($wp_customize)
{

    $wp_customize->add_section('general_settings', array(
        'title' =>  __('General Settings', 'neveshtan')
    ));
    $wp_customize->add_section('header_settings', array(
        'title' =>  __('Header Settings', 'neveshtan')
    ));
    $wp_customize->add_section('postcard_settings', array(
        'title' =>  __('Post Card Settings', 'neveshtan')
    ));
    $wp_customize->add_section('post_settings', array(
        'title' =>  __('Post Settings', 'neveshtan')
    ));
    $wp_customize->add_section('footer_settings', array(
        'title' =>  __('Footer Settings', 'neveshtan')
    ));

    // Color Scheme
    $themesetting[] = array(
        'slug' => 'color_scheme',
        'section' => 'general_settings',
        'mod' => 'option',
        'default' => 'blue_gray',
        'type' => 'select',
        'label' => __('Theme Color', 'neveshtan'),
        'choices' => array(
            'brown' => __('Brown', 'neveshtan'),
            'amber' => __('Amber', 'neveshtan'),
            'green' => __('Green', 'neveshtan'),
            'cyan' => __('Cyan', 'neveshtan'),
            'blue_grey' => __('Blue Grey', 'neveshtan'),
            'light_blue' => __('Blue', 'neveshtan'),
            'indigo' => __('Indigo', 'neveshtan'),
            'purple' => __('Purple', 'neveshtan'),
            'pink' => __('Pink', 'neveshtan'),
            'red' => __('Red', 'neveshtan')
        )
    );

    // Font Families
    $themesetting[] = array(
        'slug' => 'font_family',
        'section' => 'general_settings',
        'mod' => 'option',
        'default' => 'Roboto',
        'type' => 'select',
        'label' => __('Theme Font', 'neveshtan'),
        'choices' => array(
            // Sorted by Typeface:
            // Latin
            'Roboto' => 'Roboto',
            'TitilliumWeb' => 'Titillium Web',
            // Arabic
            'Sahel' => 'Sahel',
            'Shabnam' => 'Shabnam',
            'Samim' => 'Samim',
            'Vazir' => 'Vazir',
            'Parastoo' => 'Parastoo'
        )
    );

    $themesetting[] = array(
        'slug' => 'display_user_panel',
        'section' => 'general_settings',
        'mod' => 'theme_mod',
        'default' => true,
        'type' => 'checkbox',
        'label' => __('Display user panel in hamburger menu.', 'neveshtan')
    );

    $themesetting[] = array(
        'slug' => 'header_position',
        'section' => 'header_settings',
        'mod' => 'option',
        'default' => 'relative',
        'type' => 'radio',
        'label' => __('Header Position', 'neveshtan'),
        'choices' => array(
            'sticky' => __('Sticky', 'neveshtan'),
            'relative' => __('Relative', 'neveshtan')
        )
    );

    $themesetting[] = array(
        'slug' => 'display_title',
        'section' => 'header_settings',
        'mod' => 'theme_mod',
        'default' => true,
        'type' => 'checkbox',
        'label' => __('Display site title.', 'neveshtan')
    );

    $themesetting[] = array(
        'slug' => 'display_search',
        'section' => 'header_settings',
        'mod' => 'theme_mod',
        'default' => true,
        'type' => 'checkbox',
        'label' => __('Display search section.', 'neveshtan')
    );

    $themesetting[] = array(
        'slug' => 'display_nav_tabs',
        'section' => 'header_settings',
        'mod' => 'theme_mod',
        'default' => true,
        'type' => 'checkbox',
        'label' => __('Dispaly navigation tabs.', 'neveshtan')
    );

    $themesetting[] = array(
        'slug' => 'display_category',
        'section' => 'postcard_settings',
        'mod' => 'theme_mod',
        'default' => true,
        'type' => 'checkbox',
        'label' => __('Display category.', 'neveshtan')
    );

    $themesetting[] = array(
        'slug' => 'card_post_info',
        'section' => 'postcard_settings',
        'mod' => 'option',
        'default' => 'both',
        'type' => 'radio',
        'label' => __('Post Information', 'neveshtan'),
        'choices' => array(
            'both' => __('Author and Date', 'neveshtan'),
            'author' => __('Only Author', 'neveshtan'),
            'date' => __('Only Date', 'neveshtan'),
            'none' => __('None', 'neveshtan')
        )
    );

    $themesetting[] = array(
        'slug' => 'display_comment_count',
        'section' => 'postcard_settings',
        'mod' => 'theme_mod',
        'default' => true,
        'type' => 'checkbox',
        'label' => __('Display comment\'s count.', 'neveshtan')
    );

    $themesetting[] = array(
        'slug' => 'read_more_text',
        'section' => 'postcard_settings',
        'mod' => 'option',
        'default' => __('More', 'neveshtan'),
        'type' => 'text',
        'label' => __('Read More Text', 'neveshtan')
    );

    $themesetting[] = array(
        'slug' => 'display_read_more_button',
        'section' => 'postcard_settings',
        'mod' => 'theme_mod',
        'default' => true,
        'type' => 'checkbox',
        'label' => __('Display read more button.', 'neveshtan')
    );

    $themesetting[] = array(
        'slug' => 'display_excerpt',
        'section' => 'post_settings',
        'mod' => 'theme_mod',
        'default' => false,
        'type' => 'checkbox',
        'label' => __('Display excerpt (abstract).', 'neveshtan')
    );

    $themesetting[] = array(
        'slug' => 'display_tags',
        'section' => 'post_settings',
        'mod' => 'theme_mod',
        'default' => false,
        'type' => 'checkbox',
        'label' => __('Display tags.', 'neveshtan')
    );

    $themesetting[] = array(
        'slug' => 'display_backtotop',
        'section' => 'footer_settings',
        'mod' => 'theme_mod',
        'default' => true,
        'type' => 'checkbox',
        'label' => __('Display back-to-top button.', 'neveshtan'),
    );

    $themesetting[] = array(
        'slug' => 'footer_bottom_text',
        'section' => 'footer_settings',
        'mod' => 'option',
        'default' => '',
        'type' => 'textarea',
        'label' => __('Footer Bottom Text', 'neveshtan'),
        'description' => __('Note: If you wish to add other content types, use Widgets section instead.', 'neveshtan')
    );

    $themesetting[] = array(
        'slug' => 'remove_emoji',
        'section' => 'general_settings',
        'mod' => 'theme_mod',
        'default' => false,
        'type' => 'checkbox',
        'label' => __('Rmove built-in emojis.', 'neveshtan'),
        'description' => __('Activate to increase speed and performance.', 'neveshtan')
    );


    foreach ($themesetting as $ths) {
        $wp_customize->add_setting(
            $ths['slug'],
            array(
                'default' => $ths['default'],
                'capability' => 'edit_theme_options',
                'type' => $ths['mod']
            )
        );
        $wp_customize->add_control(
            $ths['slug'],
            array(
                'type' => $ths['type'],
                'section' => $ths['section'],
                'label' => $ths['label'],
                'settings' => $ths['slug'],
                'description' => (isset($ths['description'])) ? $ths['description'] : '',
                'choices' => (isset($ths['choices'])) ? $ths['choices'] : ''
            )
        );
    }
}

add_action('customize_register', 'neveshtan_customize_register');
