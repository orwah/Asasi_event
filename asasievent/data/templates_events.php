<?php
 /**
 * Asasi theme
 * v 0.1 2018
 * Orwah Ali Issa 
 * orwah.net / sy-it.com / c4do.com
 */

 /*
 * HOW TO USE :
 * find the suitable event from the bellow list, and Just replace 'false' by one of those 2 ways: 
 * 1- Use direct HTML string ,example : 
 *         define("TEMPLATE_AFTER_POST", "<br>****<hr><br>"); 
 * 2- or instead of html you can put a php file name (files must be inside data/templates/ folder) , example :
 *        define("TEMPLATE_BEFORE_HEADER", "before_header.php");
 *
 *
 * Notice: the /data folder must be outside the main theme folder , or in a child theme,
 * so all of its content will not be affected by any future theme updates or wordpress updates, then you can put your tweaks there safely (-;
 */
 
 
 /* Header */
// will add the content of the included file before the header.
define("TEMPLATE_BEFORE_HEADER", "before_header.php");

// will add the content of the included file at the begining of the header. (inside the navbar class)
define("TEMPLATE_BEGIN_OF_HEADER", false);

// will replace the whole header with the content of included file . (default header will not displayed!)
define("TEMPLATE_REPLACE_HEADER", false);

// will add the content of the included file at the END of the the header. 
define("TEMPLATE_END_OF_HEADER", false);

// will add the content of the included file after the header.
define("TEMPLATE_AFTER_HEADER", false);




// replace the NavBar Header .
define("TEMPLATE_REPLACE_NAVBAR_HEADER", false);

// replace the NavBar Brand (Site Title or Logo URL)  .
define("TEMPLATE_REPLACE_NAVBAR_BRAND", false);

// Main menu (at the Top Header)
define("TEMPLATE_BEFORE_MAIN_MENU", false);
define("TEMPLATE_REPLACE_MAIN_MENU", false);
define("TEMPLATE_AFTER_MAIN_MENU", false);

// Top of site (after header , before content)
define("TEMPLATE_TOP_BEFORE_ROW", false);

// main content
define("TEMPLATE_BEFORE_CONTENT", false);
define("TEMPLATE_CONTENT_BEGIN", false);
define("TEMPLATE_CONTENT_END", false);

// Post
define("TEMPLATE_BEFORE_POST", false);
define("TEMPLATE_POST_BEGIN", false);
define("TEMPLATE_REPLACE_POST", false);
define("TEMPLATE_BEFORE_POST_CONTENT", false);
define("TEMPLATE_AFTER_POST_CONTENT", false);
define("TEMPLATE_REPLACE_POST_TITLE", false);
define("TEMPLATE_REPLACE_POST_MORE", false);
define("TEMPLATE_REPLACE_POST_PAGINATION", false);
define("TEMPLATE_REPLACE_POST_META", false);  //posted by
define("TEMPLATE_REPLACE_POST_LINKS", false); // newer/older posts
define("TEMPLATE_REPLACE_POST_THUMBNAIL", false);// featured image
define("TEMPLATE_POST_END", false);
define("TEMPLATE_AFTER_POST", false);

define("TEMPLATE_REPLACE_PAGE_NOT_FOUND", false);

//Side Bar
define("TEMPLATE_BEFORE_SIDEBAR", false);
define("TEMPLATE_REPLACE_SIDEBAR", false);
define("TEMPLATE_SIDEBAR_BEGIN", false);
define("TEMPLATE_SIDEBAR_END", false);

define("TEMPLATE_SIDEBAR_BEFORE_WIDGET", '<div id="%1$s" class="widget %2$s" >');
define("TEMPLATE_SIDEBAR_AFTER_WIDGET", '</div><hr>');
define("TEMPLATE_SIDEBAR_BEFORE_TITLE", '<h5 class="widgettitle">');
define("TEMPLATE_SIDEBAR_AFTER_TITLE", '</h5>');


//
define("TEMPLATE_REPLACE_PAGE_404", false);

// footer
define("TEMPLATE_BEFORE_FOOTER", false);
define("TEMPLATE_FOOTER_BEGIN", false);
define("TEMPLATE_REPLACE_FOOTER", false);
define("TEMPLATE_FOOTER_END", false);
define("TEMPLATE_AFTER_FOOTER", false);

// Comments
define("TEMPLATE_BEFORE_COMMENTS", false);
define("TEMPLATE_REPLACE_COMMENTS", false);
define("TEMPLATE_END_COMMENTS", false);


//define("TEMPLATE_", false);
//define("TEMPLATE_", false);    
?>