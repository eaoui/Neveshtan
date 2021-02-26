<?php
function neveshtan_widgets_init()
{
    $footerwidget[] = array(
        'name' => __('Footer - Left', 'neveshtan'),
        'id' => 'footer_left'
    );
    $footerwidget[] = array(
        'name' => __('Footer - Center', 'neveshtan'),
        'id' => 'footer_center'
    );
    $footerwidget[] = array(
        'name' => __('Footer - Right', 'neveshtan'),
        'id' => 'footer_right'
    );
    $footerwidget[] = array(
        'name' => __('Footer - Bottom', 'neveshtan'),
        'id' => 'footer_bottom'
    );
    foreach ($footerwidget as $fw) {
        register_sidebar(array(
            'name'          => $fw['name'],
            'id'            => $fw['id'],
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '<h6>',
            'after_title' => '</h6>'
        ));
    }
}
add_action('widgets_init', 'neveshtan_widgets_init');
