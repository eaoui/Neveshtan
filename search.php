<?php
get_header();
?>
<div class="container">
    <div class="search-result">

        <?php get_search_form(); ?>
        <p><?php echo $wp_query->found_posts;
            echo ' ';
            esc_html_e('results found.', 'neveshtan'); ?>
        </p>
    </div>
</div>

<?php get_template_part('template-parts/content/posts'); ?>
<?php get_footer(); ?>