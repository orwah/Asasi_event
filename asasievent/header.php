<?php
/**
 * Asasi theme
 * v 0.1 2018
 * Orwah Ali Issa
 * orwah.net / sy-it.com / c4do.com
 */

?>
<!DOCTYPE html>
<HTML <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="orwah issa - www.orwah.net">

    <?php if (CONST_SHOW_FAV_ICON) { ?>
        <link rel="icon" href="<?php echo get_template_directory_uri() ?>/favicon.ico">
    <?php } ?>

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <title> <?php bloginfo('name'); ?><?php wp_title('&mdash;'); ?> </title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?> >

<?php
/*
if ( is_admin_bar_showing() ) {
     echo "<div class=''></div>";
}
 */

template_event(TEMPLATE_BEFORE_HEADER);
if (!template_event(TEMPLATE_REPLACE_HEADER)) {
    ?>

    <nav id="header"
         class="navbar navbar-static-top <?php if (CONST_DARK_HEADER) echo "navbar-inverse"; else echo "navbar-default"; ?>">

        <?php if (CONST_CONTAINER_FLUID) { ?>
        <div class="container-fluid">
            <?php } else { ?>
            <div class="container">
                <?php } ?>
                <?php template_event(TEMPLATE_BEGIN_OF_HEADER); ?>

                <?php if (!template_event(TEMPLATE_REPLACE_NAVBAR_HEADER)) { ?>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target=".MM1_collapse" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <?php if (!template_event(TEMPLATE_REPLACE_NAVBAR_BRAND)) { ?>
                            <a class="navbar-brand" href="<?php bloginfo('url'); ?>"
                               title="<?php bloginfo('description'); ?>">
                                <?php if (CONST_SHOW_LOGO_IMAGE) { ?>
                                    <img src="<?php echo get_template_directory_uri() ?>/images/logo.png" border="0">
                                <?php } else { ?>
                                    &nbsp; <?php bloginfo('name'); ?>
                                <?php } ?>
                            </a>
                        <?php } ?>

                        <?php if (CONST_SHOW_SITE_DESCRIPTION) { ?>
                            <div id="description"><?php bloginfo('description'); ?></div>
                        <?php } ?>
                    </div>
                <?php } ?>

                <!--
                <ul class="nav navbar-nav">
                <li id="page_Home" ><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                Home</a> </li>
                <li id="page_About"><a href="#about"><span class="glyphicon glyphicon glyphicon-link" aria-hidden="true"></span>
                About Company</a></li>
                <li id="page_Contact"><a href="contactus.php"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                Contact Us</a></li>
                </ul>
                -->

                <?php
                template_event(TEMPLATE_BEFORE_MAIN_MENU);
                if (!template_event(TEMPLATE_REPLACE_MAIN_MENU)) {
                    if (has_nav_menu('header-menu')) {

                        wp_nav_menu(array(
                            'theme_location' => 'header-menu',
                            'depth' => 2,
                            'container' => 'div',
                            'container_class' => 'navbar-nav collapse navbar-collapse MM1_collapse',
                            'menu_class' => 'nav navbar-nav',
                            'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                            'walker' => new wp_bootstrap_navwalker()
                        ));

                    }
                    if (CONST_AUTO_LIST_HEADER_PAGES) { ?>
                        <ul class="nav navbar-nav collapse navbar-collapse MM1_collapse">
                            <?php wp_list_pages('title_li=&depth=-1'); ?>
                        </ul>
                        <?php
                    }
                }
                template_event(TEMPLATE_AFTER_MAIN_MENU);
                ?>

                <?php if (CONST_SHOW_LOGIN_LINK) { ?>
                    <ul class="nav navbar-nav pull-right ">
                        <li id="page_Login">
                            <a href="wp-login.php"><?php _e('Login', 'asasi'); ?></a>
                        </li>
                        <li> &nbsp; &nbsp;</li>
                    </ul>
                <?php } ?>

                <?php template_event(TEMPLATE_END_OF_HEADER); ?>
            </div>
    </nav>
    <?php
}
template_event(TEMPLATE_AFTER_HEADER);
?>

<?php if (CONST_CONTAINER_FLUID) { ?>
<div class="container-fluid">
    <?php } else { ?>
    <div class="container">
        <?php } ?>

        <?php template_event(TEMPLATE_TOP_BEFORE_ROW); ?>
        <div class="row">
      

