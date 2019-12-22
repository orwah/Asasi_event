# Asasi_event
Just an idea for WordPress basic theme, from a 'developer friendly' point of view, it will allow developers to customize all theme parts programmatically and via predefined events, with no danger of losing changes when updating theme.
that means you can changes every thing on this theme not only look & feel but even functionality.

Version: 0.1
Tags: light, white, bootstrap, multilangual, RTL, right to left, Arabic, developer friendly, Support Events 


All custom changes and modifications will be stored in the Data Folder, 
Please notice that any theme updates will overwrite the whole folder completely, so you can't keep the Data folder inside the main theme folder, you need to move it outside theme folder (or put it in a child them).
you can set the path of the new data folder from Functions.php, and that will enable you to test and try as many data-folders as you want, each with a different properities,style,view and functionality by just changing the current used data folder path .


inside data folder you will find :
- preferences.php      : here you will set some general setting 
- templates_events.php : here you will put your events 

HOW TO USE templates_events :
 find the suitable event from the \data\templates_events.php eveints list, and Just replace 'false' by one of those 2 ways: 
 * 1- Use direct HTML string ,example : 
          define("TEMPLATE_AFTER_POST", "<br><hr><br>"); 
 * 2- or instead of html you can put a php file name (files must be located inside data/templates/ folder) , example :
          define("TEMPLATE_BEFORE_HEADER", "before_header.php");
 
 
 * Notice: the /data folder must be outside the main theme folder , or in a child theme,
 * so all of its content will not be affected by any future theme updates or wordpress updates, then you can put your tweaks there safely (-;


Author: Orwah Issa
