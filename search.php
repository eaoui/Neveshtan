<?php
get_header();
?>
<div class="container">
    <p><?php echo $wp_query->found_posts;
        echo ' ';
        esc_html_e('results for:', 'neveshtan'); ?> <b><?php the_search_query(); ?></b>
    </p>
</div>

<?php get_template_part('template-parts/content/posts'); ?>
<?php get_footer(); ?>