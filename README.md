# Asasi_event
Just an idea for WordPress basic theme, from a 'developer friendly' point of view, it will allow developers to customize all theme parts programmatically and via predefined events, with no danger of losing changes when updating theme.<br>

that means you can changes every thing on this theme not only look & feel but even functionality, and you can give every customer different style for its WebSite with different functionality by using the same theme.<br>

Mostly you will not need to use a child theme , just put all changes in Data folder, and it will not be affected by any future theme updates or wordpress updates, then you can put your tweaks there safely 


Version: 0.1<br>
Tags: light, white, bootstrap, multilangual, RTL, right to left, Arabic, developer friendly, Support Events<br> 


All custom changes and modifications will be stored in the Data Folder, <br>
Please notice that any theme updates will overwrite the whole folder completely, so you can't keep the Data folder inside the main theme folder, you need to move it outside theme folder (or put it in a child them).<br>

you can set the path of the new data folder from Functions.php, and that will enable you to test and try as many data-folders as you want, each with a different properities,style,view and functionality by just changing the current used data folder path .<br>



inside data folder you will find :
- preferences.php      : here you will set some general setting 
- templates_events.php : here you will put your events 

<b>HOW TO USE templates_events :</b><br>
 find the suitable event from the \data\templates_events.php eveints list, and Just replace 'false' by one of those 2 ways: 
 * 1- Use direct HTML string ,example :<br> 
          define("TEMPLATE_AFTER_POST", "&lt;br&gt;&lt;hr&gt;&lt;br&gt;"); 
 * 2- or instead of html you can put a php file name (files must be located inside data/templates/ folder) , example :<br>
          define("TEMPLATE_BEFORE_HEADER", "before_header.php");
 
 
 
<u> Notice,</u> this is only a startup idea, it still needs a lot of work to be ready to use.<br>
 i Plane to use it in one of my websites to make the development process faster .
 
Regards

Author: Orwah Issa
