<?php
get_header();
if (have_posts()) :
    while (have_posts()) :
        the_post();
?>
        <article class="container">
            <?php the_category(); ?>
            <h1><?php the_title(); ?></h1>
            <div class="post-information">
                <?php
                esc_html_e('By', 'neveshtan');
                echo ' ';
                the_author_posts_link();
                echo ' ';
                esc_html_e('in', 'neveshtan');
                echo ' ';
                the_date();
                ?>
            </div>
            <?php
            if (get_theme_mod('display_excerpt', false) === true) {
                the_excerpt();
            }
            the_content();
            if (get_theme_mod('display_tags', false) === true) {
                echo '<strong>' . __('Tags:', 'neveshtan') . ' </strong>' . get_the_tag_list('', '، ');
            }
            comments_template();
            ?>
        </article>
<?php
    endwhile;
endif;
get_footer();
?>