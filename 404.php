<?php
get_header();
get_template_part('template-parts/navigation/navigation-tabs');
?>
<div class="page">
    <h4 style="font-size:4rem;line-height:48px;text-align:center">404 :(</h4>
    <div class="container">
        <p style="text-align:center"><?php esc_html_e('Page not found', 'neveshtan'); ?></p><br><br>
    </div>
</div>
<?php get_footer(); ?>