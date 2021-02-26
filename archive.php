<?php get_header();
get_template_part('template-parts/navigation/navigation-tabs'); ?>
<div class="container">
    <h1><?php the_archive_title(); ?></h1>
    <?php the_archive_description(); ?>
</div>
<?php get_template_part('template-parts/content/posts');
get_footer(); ?>