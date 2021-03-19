<div class="comments">
    <h4><?php esc_html_e('Comments', 'neveshtan'); ?> (<?php comments_number(__('0', 'neveshtan'), __('1', 'neveshtan'), '%'); ?>)</h4>
    <?php
    wp_list_comments('type=comment&callback=format_comment'); // This refers to function.php
    ?>

    <div class="pagination">
        <div id="older-posts"><?php next_comments_link(__('Next', 'neveshtan')); ?></div>
        <div id="newer-posts"><?php previous_comments_link(__('Previous', 'neveshtan')); ?></div>
    </div>

    <?php
    comment_form(
        array(
            'fields' => array(
                'author' => '<div class="input"><label for="author">' . __('Name', 'neveshtan') . ' *</label><input id="author" name="author" type="text" value="" size="30" maxlength="245" required></div>',
                'emial' => '<div class="input"><label for="email">' . __('Email', 'neveshtan') . ' *</label><input id="email" name="email" type="email" value="" size="30" maxlength="100" lang="en" required></div>',
                'cookies' => '<div class="checkbox"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"><label for="wp-comment-cookies-consent">' . __('Remember me', 'neveshtan') . '</label></div>'
            ),
            'comment_field' => '<div><textarea id="comment" name="comment" placeholder="' . __('Enter the text here.', 'neveshtan') . '" required></textarea></div>',
            'must_log_in' => __('You must be logged in.', 'neveshtan'),
            'comment_notes_before' => '',
            'comment_notes_after' => '',
            'title_reply' => __('Leave a comment', 'neveshtan'),
            'title_reply_to' => __('Reply to', 'neveshtan') . ' %s',
            'title_reply_before' => '<h5>',
            'title_reply_after' => '</h5>',
            'label_submit' => __('Submit', 'neveshtan')
        )
    );
    ?>
</div>