# Asasi_event
Just an idea for WordPress basic theme, from a 'developer friendly' point of view, it will allow developers to customize all theme parts from code and by using theme predefined events, with no danger of losing changes by theme updates.<br>

that means you can changes alot of things in this theme, not only look&feel but even functionality, and you can give every wp site different style with different functionality by using the same theme.<br>

Mostly you will not need to use a child theme, you can just put all changes in the 'Data' folder, and it will not be affected by any future theme updates or wordpress updates, then you can put your tweaks there safely.(-;


Version: 0.1<br>
Tags: light, white, bootstrap, multilangual, RTL, right to left, Arabic, developer friendly, Support Events<br> 


All custom changes and modifications will be stored in the Data Folder, <br>
Please notice that any theme updates will overwrite the whole folder completely, so you can't keep the Data folder inside the main theme folder, you need to move it outside theme folder (or put it in a child them).<br>

you can set the path of the new data folder from Functions.php, and that will enable you to test and try as many data-folders as you want, each with a different properities,style,view and functionality by just changing the current used data folder path .<br>


<b>HOW TO USE:</b><br>
inside 'data' folder you will find :
- preferences.php      : here you will set some general setting. 
- css folder           : you can put your custom css here (styl.css, styl-rtl.css, styl-ltr.css).
- functions.php        : you can override functions.php (still an idea).
- templates_events.php : here you will put your magic :

Use Templates Events :<br>
 find the suitable event from the \data\templates_events.php eveints list, and Just replace 'false' by one of those 2 ways: 
 * 1- Use direct HTML string ,example :<br> 
          define("TEMPLATE_AFTER_POST", "&lt;br&gt;&lt;hr&gt;&lt;br&gt;"); 
 * 2- or instead of html you can put a php file name (files must be located inside data/templates/ folder) , example :<br>
          define("TEMPLATE_BEFORE_HEADER", "before_header.php");
 
 
 
__ Notice,__ this is only a startup idea, it still needs a lot of work to be ready for use.<br>
 
 
 
 
 
 
 
 <b>
 currently supported events :
<pre>  /* Header */
"TEMPLATE_BEFORE_HEADER" // add the custom content before the header.
"TEMPLATE_BEGIN_OF_HEADER" // add the custom content at the begining of the header. (inside the navbar class)
"TEMPLATE_REPLACE_HEADER"// replace the whole header with the custom content. (default header will not displayed!)
"TEMPLATE_END_OF_HEADER" // will add the custom content at the END of the the header. 
"TEMPLATE_AFTER_HEADER" // will add the custom content after the header.
"TEMPLATE_REPLACE_NAVBAR_HEADER" // will replace the NavBar Header .
"TEMPLATE_REPLACE_NAVBAR_BRAND" // replace the NavBar Brand (Site Title or Logo URL).



// Main menu (at the Top Header)
"TEMPLATE_BEFORE_MAIN_MENU"
"TEMPLATE_REPLACE_MAIN_MENU"
"TEMPLATE_AFTER_MAIN_MENU"

// Top of site (after header , before content)
"TEMPLATE_TOP_BEFORE_ROW"

// main content
"TEMPLATE_BEFORE_CONTENT"
"TEMPLATE_CONTENT_BEGIN"
"TEMPLATE_CONTENT_END"

// Post
"TEMPLATE_BEFORE_POST"
"TEMPLATE_POST_BEGIN"
"TEMPLATE_REPLACE_POST"
"TEMPLATE_BEFORE_POST_CONTENT"
"TEMPLATE_AFTER_POST_CONTENT"
"TEMPLATE_REPLACE_POST_TITLE"
"TEMPLATE_REPLACE_POST_MORE"
"TEMPLATE_REPLACE_POST_PAGINATION"
"TEMPLATE_REPLACE_POST_META"  //posted by
"TEMPLATE_REPLACE_POST_LINKS" // newer/older posts
"TEMPLATE_REPLACE_POST_THUMBNAIL" // featured image
"TEMPLATE_POST_END"
"TEMPLATE_AFTER_POST"

"TEMPLATE_REPLACE_PAGE_NOT_FOUND"

//Side Bar
"TEMPLATE_BEFORE_SIDEBAR"
"TEMPLATE_REPLACE_SIDEBAR"
"TEMPLATE_SIDEBAR_BEGIN"
"TEMPLATE_SIDEBAR_END"

"TEMPLATE_SIDEBAR_BEFORE_WIDGET"
"TEMPLATE_SIDEBAR_AFTER_WIDGET"
"TEMPLATE_SIDEBAR_BEFORE_TITLE"
"TEMPLATE_SIDEBAR_AFTER_TITLE"

"TEMPLATE_REPLACE_PAGE_404"

// footer
"TEMPLATE_BEFORE_FOOTER"
"TEMPLATE_FOOTER_BEGIN"
"TEMPLATE_REPLACE_FOOTER"
"TEMPLATE_FOOTER_END"
"TEMPLATE_AFTER_FOOTER"

// Comments
"TEMPLATE_BEFORE_COMMENTS"
"TEMPLATE_REPLACE_COMMENTS"
"TEMPLATE_END_COMMENTS"
 </pre>
 
 
 
Regards

Author: Orwah Issa
