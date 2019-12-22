<?php
/**
 * Asasi theme
 * v 0.1 2018
 * Orwah Ali Issa
 * orwah.net / sy-it.com / c4do.com
 */

template_event(TEMPLATE_BEFORE_COMMENTS);
if (!template_event(TEMPLATE_REPLACE_COMMENTS)) {

    if ($comments) :
        ?>

        <div>&nbsp;</div>
        <div id="comments">
            <h4><?php _e('Comments', 'asasi'); ?></h4>
            <hr>
            <?php wp_list_comments(); ?>
            <div class="pagination"><?php paginate_comments_links(); ?></div>
        </div><!-- comments -->
    <?php endif; ?>

    <?php if (comments_open() || pings_open()) { ?>
        <?php comment_form('comment_notes_before=&comment_notes_after='); ?>
    <?php } elseif ($comments) { ?>
        <div id="respond"><p id="closed"><?php _e('Comments closed', 'asasi'); ?></p></div>
        <?php
    }
}
template_event(TEMPLATE_END_COMMENTS);
?>