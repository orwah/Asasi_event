<?php
/**
 * Asasi theme
 * v 0.1 2018
 * Orwah Ali Issa
 * orwah.net / sy-it.com / c4do.com
 */

include_once("header.php");
?>


<?php template_event(TEMPLATE_BEFORE_CONTENT); ?>
    <div id="content" <?php if (is_active_sidebar('sidebar_1')) echo 'class="col-sm-8 col-sm-push-4 col-md-9 col-md-push-3" '; ?>>
        <?php
        template_event(TEMPLATE_CONTENT_BEGIN);

        if (have_posts()) :
            while (have_posts()) :
                the_post();
                ?>

                <?php template_event(TEMPLATE_BEFORE_POST);
                if (!template_event(TEMPLATE_REPLACE_POST)) { ?>
                    <div <?php post_class(); ?>>

                        <?php template_event(TEMPLATE_POST_BEGIN); ?>
                        <?php if (!template_event(TEMPLATE_REPLACE_POST_TITLE)) { ?>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <?php } ?>

                        <?php
                        template_event(TEMPLATE_BEFORE_POST_CONTENT);

                    if (!template_event(TEMPLATE_REPLACE_POST_THUMBNAIL)) {
                        if (has_post_thumbnail()) {
                            the_post_thumbnail();
                        }
                    }

                        the_content();
                        template_event(TEMPLATE_AFTER_POST_CONTENT);
                        ?>

                        <?php
                        if (!template_event(TEMPLATE_REPLACE_POST_MORE)) {
                            if (!is_singular() && get_the_title() == '') { ?>
                                <a href="<?php the_permalink(); ?>"><?php _e('(more...)', 'asasi'); ?></a>
                            <?php }
                        } ?>

                        <?php
                        if (!template_event(TEMPLATE_REPLACE_POST_PAGINATION)) {
                            if (is_singular()) { ?>
                                <div class="pagination"><?php wp_link_pages(); ?></div>
                            <?php }
                        } ?>

                        <?php template_event(TEMPLATE_POST_END); ?>

                        <div class="clear"></div>
                    </div><!-- post_class() -->
                    <?php
                }
                template_event(TEMPLATE_AFTER_POST);
                ?>

                <?php
                if (is_singular()) : ?>

                    <?php if (!template_event(TEMPLATE_REPLACE_POST_META)) { ?>
                        <div class="meta pull-right">
                            <p><?php _e('Posted by', 'asasi'); ?> <?php the_author_posts_link(); ?>
                                <?php _e('on', 'asasi'); ?> <a href="<?php the_permalink(); ?>"><?php the_date(); ?></a>
                                <?php if (!empty(get_the_category_list()) or !empty(get_the_tag_list())) {
                                    _e('in', 'asasi'); ?><?php the_category(', '); ?><?php the_tags(', ');
                                } ?>
                            </p>

                        </div><!-- meta -->
                    <?php } ?>

                    <?php comments_template(); ?>
                <?php endif; ?>

            <?php
            endwhile;
        else:
            if (!template_event(TEMPLATE_REPLACE_PAGE_NOT_FOUND)) {
                ?>
                <div class="alert alert-info" role="alert">
                    <h2><?php _e('Sorry, the page you requested cannot be found', 'asasi'); ?></h2></div>
                <?php
            }
        endif;
        ?>



        <?php
        if (is_404()) {
            if (!template_event(TEMPLATE_REPLACE_PAGE_404)) {
                ?>
                <div> <?php _e('404 page not found', 'asasi'); ?></div>
                <?php
            }
        } else {
            if (!template_event(TEMPLATE_REPLACE_POST_LINKS)) {
                ?>
                <div class="left"><?php next_posts_link('&laquo; Older posts'); ?></div>
                <div class="right"><?php previous_posts_link('Newer posts &raquo;'); ?></div>
            <?php }
        } ?>

        <?php template_event(TEMPLATE_CONTENT_END); ?>
        <div class="clear"></div>
    </div><!-- content -->


<?php
template_event(TEMPLATE_BEFORE_SIDEBAR);
if (!template_event(TEMPLATE_REPLACE_SIDEBAR)) {
    if (is_active_sidebar('sidebar_1')) {
        ?>
        <nav id="sidebar_1" class="col-sm-4 col-sm-pull-8 col-md-3 col-md-pull-9 widgets sidebar" role="navigation">
            <?php
            template_event(TEMPLATE_SIDEBAR_BEGIN);
            dynamic_sidebar('sidebar_1');
            template_event(TEMPLATE_SIDEBAR_END);
            ?>
        </nav>
    <?php }
} ?>


<?php
include_once("footer.php");
?>