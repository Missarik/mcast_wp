# mcast_wp

#WordPress Website README

##Project Overview

This repository contains source code for mcast_wp WordPress website. It serves as a reference for developers and collaborators working on the project.

This theme was made as a template for schools, mostly for post-secondary and University, however, it can be used in any way the user pleases. The colour scheme used was inspired by the colour scheme of MCAST.

The following 2 sections will explain each feature found in customize.php and functions.php, how they are used and how to access them.


customize.php:

The customize.php page allows the developers to add extra features that they wish. Developers are free to add, remove or adjust features through this page. All the following features can be edited from the customizer in WordPress.

Custom_footer_options allows the user to set the colour of the footer from light mode to dark mode, and set the text colour in the footer whenever they please.

Custom_footer_widget_count can be used for users to set how many columns you can have in the footer ranging from 1-4 columns. Developers are free to add more with coding.

Custom_carousel_image allows the user to insert 3 images in the carousel found in the home page. Users can change the images whenever they like.

Custom_dark_mode lets the user to change the website from light to dark mode with a click of a button. Light mode sets the background colour of the body to white and the text to black, and dark mode sets the background colour of the body to a dark grey colour and the text to white.


functions.php:

The functions page allows developers to add extra features just like the customize.php, however these features cannot be adjusted through the admin page.

classExample_h6title() outputs the name of the page at the top of the webpage. Ex. The word “Gallery” is displayed at the top of the gallery page.

classExample_excerptLength() stops loading words from the article from the search results and the archive pages after a certain amount of words set by the developer. The user must click on ‘Read More’ to read the rest of the article.

classExample_themeFooter sets the background and text colour of the footer set manually by the developer.

classExample_postorderasc filters all posts searched in the search bar in ascending order.

Diwp_theme_customizer_options sets the logo for your website. To set up the logo of your website, the user can rename any image to ‘logo.jpg’.


Plugins

The following plugins are used in this project:
• WPForms Lite


Contributing
We welcome contributions! If you have any issues or have any suggestions for improvement, please create a new issue or submit a pull request.
If you would wish to contact us feel free to send us an email at example@gmail.com.
