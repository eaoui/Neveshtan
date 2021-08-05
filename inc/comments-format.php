<?php

function format_comment($args, $comment)
{

    $commnets_reply = get_comment_reply_link(array(
        'add_below' => __('Reply', 'neveshtan'),
        'reply_text' => __('Reply', 'neveshtan'),
        'login_text' => __('You must be logged in.', 'neveshtan'),
        'depth'     => 1,
        'max_depth' => 4
    ));

    echo '<div class="bubble"><p>' . get_comment_text() .
        '</p><div class="reply">' . $commnets_reply .
        '</div></div><div class="comment-info"><strong>' . get_comment_author() .
        '</strong> ' . get_comment_date() . ' - ' . get_comment_time() .
        '</div>';
}
