<?php
/**
 * Asasi theme
 * v 0.1 2018
 * Orwah Ali Issa
 * orwah.net / sy-it.com / c4do.com
 */

/**
 * IMPORTANT: theme updates will overwrite Data folder completely,
 * so you must move the Data folder outside the main theme folder , (or put it in a child them).
 * please set the path of the new data folder bellow (for example one level up):
 **/
$data_folder = get_template_directory() . '/data';

include $data_folder . '/preferences.php';
include $data_folder . '/templates_events.php';

if (!isset($content_width))
    $content_width = CONST_CONTENT_WIDTH;


if (!function_exists('asasi_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which runs
     * before the init hook. The init hook is too late for some features, such as indicating
     * support post thumbnails.
     */
    function asasi_setup()
    {

        // Make theme available for translation.
        load_theme_textdomain('asasi', get_template_directory() . '/languages');


        // Add default posts and comments RSS feed links to <head>.
        if (function_exists('add_theme_support')) add_theme_support('automatic-feed-links');


        // Enable support for post thumbnails and featured images.
        add_theme_support('post-thumbnails');


        // Enable support for the following post formats:
        //add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );


        if (function_exists('register_nav_menus')) register_nav_menus(array('header-menu' => __('Header Menu'),));

        if (function_exists('register_sidebar')) register_sidebar(array(
            'name' => __('Sidebar', 'asasi'),
            'id' => 'sidebar_1',
            //'description'   => '',
            //'class'         => '',
            'before_widget' => TEMPLATE_SIDEBAR_BEFORE_WIDGET,
            'after_widget' => TEMPLATE_SIDEBAR_AFTER_WIDGET,
            'before_title' => TEMPLATE_SIDEBAR_BEFORE_TITLE,
            'after_title' => TEMPLATE_SIDEBAR_AFTER_TITLE));


    }
endif; // asasi_setup
add_action('after_setup_theme', 'asasi_setup');


/**
 * Enqueue scripts and styles.
 */
function asasi_scripts($in_footer)
{

    wp_enqueue_style('bootstrap.min', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', true);

    if (is_rtl()) {
        wp_enqueue_style('bootstrap-rtl', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap-rtl.css', true);
        wp_enqueue_style('style-rtl', get_template_directory_uri() . '/css/style-rtl.css', true);

        if (file_exists($data_folder . '/css/styl-rtl.css'))
            wp_enqueue_style('styl-rtl', $data_folder . '/css/styl-rtl.css', true);
    } else {
        wp_enqueue_style('style-ltr', get_template_directory_uri() . '/css/style-ltr.css', true);

        if (file_exists($data_folder . '/css/styl-ltr.css'))
            wp_enqueue_style('styl-ltr', $data_folder . '/css/styl-ltr.css', true);
    }

    if (file_exists($data_folder . '/css/styl.css'))
        wp_enqueue_style('styl', $data_folder . '/css/styl.css', true);
    //if (empty($ar))
    //wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/fonts/font-awesome/css/font-awesome.min.css',true );   

    //  wp_enqueue_script( 'albaseet-js', get_template_directory_uri() . '/js/albaseet.js',array('jquery'),'',true);      

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'asasi_scripts');


/**
 * Load custom nav walker
 */
if (!class_exists('wp_bootstrap_navwalker')) {
    require get_template_directory() . '/include/navwalker.php';
}


function template_event($eventname)
{
    if (isset($eventname) and $eventname)
        if (is_string($eventname))
            if (strtolower(substr(trim($eventname), -4)) == ".php") {
                if (file_exists($data_folder . '/templates/' . $eventname)) {
                    include $data_folder . '/templates/' . $eventname;
                    return true;
                }
            } else {
                echo $eventname;
                return true;
            }

    return false;
}


//include the user Functions file
if (file_exists($data_folder . '/functions.php'))
    include $data_folder . '/functions.php';