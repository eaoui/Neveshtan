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

<?php wp_footer(); ?>

</body>

</html>