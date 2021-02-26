<?php get_header();
get_template_part('template-parts/navigation/navigation-tabs');
if (have_posts()) :
    while (have_posts()) :
        the_post();
?>
        <div class="page">
            <div class="container">
                <h1 style="text-align:center"><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div>
        </div>
<?php endwhile;
endif;
get_footer(); ?>