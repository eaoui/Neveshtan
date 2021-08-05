<form method="get" action="<?php echo home_url('/'); ?>" id="searchform" role="search">
    <input type="search" placeholder="<?php esc_html_e('Search...', 'neveshtan'); ?>" value="<?php the_search_query(); ?>" name="s" id="s">
    <input type="submit">
</form>