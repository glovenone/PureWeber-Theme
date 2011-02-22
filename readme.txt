MagZine Theme Instalation Guide
--------
MagZine is a magazine styled wordpress theme that so easy to use and configure. See the live action in: http://designmagz.com. MagZine is a free wordpress theme as long as the footer signature remain. For signature / copyright removal, please contact me at pupungbp [at] gmail.com.
--------
Instalation:
1. Unzip the MagZine.zip then, you will get a folder named "MagZine" insine MagZine folder beside Readme.txt file
2. Upload folder "MagZine" into wp-content/theme at your Web server.
3. Activate the theme within yoursite.com/wp-admin, select Appereance Menu > Theme and then select MagZine to activate.
4. You are ready to roll.
--------
Modification Guide:
For more convenient use, i suggest you follow the modification guide.

Note: I will add this feature on the theme option in next release plus many additions.

MagZine consist of; Main Area, Featured Area (with automated thumbnail generation), and Other Post Archive. You will easily change the default settings from the functions.php file inside the theme folder.

Open functions.php with plain text editor such Notepad, Editplus, BBEdit, or even VIM.

Main Area
Main Area located at the midle of the layout, it has a biger and wider portion of all.
/*MAIN CATEGORY*/
$maincat 	= berita; /*change "berita" into category you want to display */
$maincatid	= 5; /*Category ID*/
$maincatnum = 2; /* Change number "2" into different number, to reflect how many news in main category do display */

How to know your Category ID? Open your wp-admin area, select Post and then Category, you will get your Category ID by click on the category link, and see the number on URL.

Featured Area
Located at the end of Main Area, it has an auto generated thumbnail, all you have to do is just upload an image.
/*FEATURED CATEGORY*/
$featcat	= tutorial;
$featcatid	= 28;
$featcatnum	= 5;
To generate a thumbnail, just upload any images to the related post, you don't have to insert your image into the post if it doesnt necessary, uploading an image is MANDATORY!. Otherwise, you will get an error message:
Warning: array_keys() [function.array-keys]: The first argument should be an array in...

Other Post Archive 
Located at the left of the design, the rest of post category excluding Category on Main Area and Featured Area located here.
/*OTHER POST ARCHIVE*/
$archivenum = 8;

Plugin Recommendation
Though the MagZine theme will running well without this plugin installed, for better experience, i suggest you install the get-image plugin by DGmike:
http://wordpress.org/extend/plugins/get-image/
after the plugins installed, go to wp-admin > setting > media, and change the thumbnail size to: 50 by 50.

Widget Area
This theme got 2 widget area, home widget, and detail widget. Change them on wp-admin > Appearance > Widget.

Copyright Removal
For Copyright Removal, please donate for the author of this theme.

Instalation Support
If you have a problem installing this theme, post it on the comment here, I will reply it or anyone does. If you want me to install it on your web server, contact me, it takes couple of bucks as compensation of my time.