<?php

//  Template Name: Full-width

get_header();
get_template_part('template-parts/navigation/navigation-tabs');
if (have_posts()) :
        while (have_posts()) :
                the_post();
?>
        <?php the_content(); ?>
<?php endwhile;
endif;
get_footer(); ?>