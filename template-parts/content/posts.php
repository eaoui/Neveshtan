<main class="posts">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php if (has_post_thumbnail()) : ?>
                    <div class="featured-image" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
                        <?php if (has_category()) : ?>
                            <?php if (get_theme_mod('display_category', true) === true) : ?>
                                <div class="post-category">
                                    <?php
                                    $categories = get_the_category();
                                    echo get_primary_category($categories);
                                    ?>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <div class="content">
                    <a href="<?php the_permalink(); ?>" title="<?php esc_html_e('Go to post\'s page', 'neveshtan'); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <div class="post-info">
                        <?php
                        if (get_option('card_post_info') === 'none') {
                        } elseif (get_option('card_post_info') === 'author') {
                            echo get_the_author_posts_link();
                        } elseif (get_option('card_post_info') === 'date') {
                            echo get_the_date();
                        } else {
                            esc_html_e('By', 'neveshtan');
                            echo ' ' . get_the_author_posts_link() . ' ';
                            esc_html_e('in', 'neveshtan');
                            echo ' ' . get_the_date();
                        }
                        ?>
                    </div>
                    <?php the_excerpt(); ?>
                    <?php if (get_theme_mod('display_read_more_button', true) === true || get_theme_mod('display_comment_count', true) === true) : ?>
                        <div class="bottom">
                            <?php if (get_theme_mod('display_read_more_button', true) === true) : ?>
                                <div class="read-more">
                                    <a href="<?php the_permalink(); ?>" title="<?php esc_html_e('Go to post\'s page', 'neveshtan'); ?>"><?php echo get_option('read_more_text', __('More', 'neveshtan')); ?></a>
                                </div>
                            <?php endif; ?>
                            <?php if (get_theme_mod('display_comment_count', true) === true) : ?>
                                <div class="comment-count">
                                    <svg viewBox="0 0 24 24">
                                        <path d="M21.99 4c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4-.01-18zM18 14H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z" />
                                        <path d="M0 0h24v24H0z" fill="none" />
                                    </svg>
                                    <?php comments_number(__('0', 'neveshtan'), __('1', 'neveshtan'), '%'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php esc_html_e('No post', 'neveshtan'); ?></p>
    <?php endif; ?>
</main>
<div class="pagination container">
    <div class="op" id="older-posts"><?php next_posts_link(__('Next', 'neveshtan')); ?></div>
    <div class="op" id="newer-posts"><?php previous_posts_link(__('Previous', 'neveshtan')); ?></div>
</div>