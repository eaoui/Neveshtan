<footer>
    <?php if (get_theme_mod('display_backtotop', true) === true) : ?>
        <svg class="backtotop" viewBox="0 0 24 24" onclick="scrollToTop()">
            <path d="M16.59 9.42L12 4.83L7.41 9.42L6 8l6-6l6 6l-1.41 1.42m0 6L12 10.83l-4.59 4.59L6 14l6-6l6 6l-1.41 1.42m0 6L12 16.83l-4.59 4.59L6 20l6-6l6 6l-1.41 1.42z" />
        </svg>
    <?php endif; ?>
    <main>
        <section>
            <?php dynamic_sidebar('footer_left'); ?>
        </section>
        <section>
            <?php dynamic_sidebar('footer_center'); ?>
        </section>
        <section>
            <?php dynamic_sidebar('footer_right'); ?>
        </section>
    </main>
    <div class="container" style="font-size: 0.9rem">
        <?php dynamic_sidebar('footer_bottom'); ?>
        <?php echo get_option('footer_bottom_text'); ?>
    </div>
</footer>

<?php
$fontfamily = get_option('font_family', 'Roboto');
$fontfamily_location = get_template_directory_uri() . '/assets/font-families/' . $fontfamily . '/' . $fontfamily;
?>

<style>
    @font-face {
        font-family: 'SelectedFontFamily';
        font-weight: normal;
        src: url("<?php echo $fontfamily_location; ?>.eot") format('embedded-opefilenametype'), url("<?php echo $fontfamily_location; ?>.woff2") format('woff2'), url("<?php echo $fontfamily_location; ?>.woff") format('woff'), url("<?php echo $fontfamily_location; ?>.ttf") format('truetype');
        font-display: swap;
    }

    @font-face {
        font-family: 'SelectedFontFamily';
        font-weight: bold;
        src: url("<?php echo $fontfamily_location; ?>-Bold.eot") format('embedded-opefilenametype'), url("<?php echo $fontfamily_location; ?>-Bold.woff2") format('woff2'), url("<?php echo $fontfamily_location; ?>-Bold.woff") format('woff'), url("<?php echo $fontfamily_location; ?>-Bold.ttf") format('truetype');
        font-display: swap;
    }
</style>

<?php wp_footer(); ?>

<script>
    const adminBar = document.getElementById('wpadminbar');
    if (typeof(adminBar) != 'undefined' && adminBar != null) {
        document.getElementsByTagName('nav')[0].style.paddingTop = '20px';
    }
</script>

</body>

</html>