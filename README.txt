=== Purify WordPress Menus ===
Contributors: kybernetikservices,Hinjiriyo
Donate link: https://www.paypal.com/donate?hosted_button_id=NSEQX73VHXKS8
Tags: plugin, navigation, menu, menus, navigation menus, page menus, category list, navigation menu, page menu, wordpress, html, css, optimization, optimisation, slim html, purification
Requires at least: 4.6
Requires PHP: 5.2
Tested up to: 6.6
Stable tag: 3.5.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Improve page speed by letting slim down the HTML code of menus and category lists to the only CSS classes and attributes your theme needs.

== Description ==

Improve page speed by letting slim down the HTML code of menus and category lists to the only CSS classes and attributes your theme needs.

The plugin is available in English, Spanish (Español) and German (Deutsch).

= Less code, higher page speed =

This plugin deletes the CSS classes you do not need in a navigation menu, page menu and category list. It slims down the HTML code of Wordpress menus and category lists to the only neccessary CSS classes you want for your theme. This results in less HTML code and thus in higher page speed.

If you are very concerned about the loading time of your website and you do not manage to gain seconds or tenths in the loading of the site with 3rd party caching plugins, you may find it interesting to experiment with the plugin Purify WordPress Menus and evaluate its possibilities.

= What users said =

* *...interesante experimentar...* in [Reduce CSS en WordPress y mejora la carga](https://www.webempresa.com/blog/reduce-css-en-wordpress-y-mejora-la-carga.html) by  Luis Méndez Alejo on August 20, 2015
* **Number 1** in [Cool List of Free Navigation Menu WordPress Plugins](http://codeknows.com/inspiration/free-navigation-menu-wordpress-plugins/) by Inspiration on January 8, 2015
* **Number 7** in [13 Excellent Free WordPress Widgets for Menus](http://cssclick.com/wordpress/free-wordpress-widgets-for-menus/) by mike on November 24, 2014
* **Number 6** in [13 Great Free HTML Widgets for WordPress](http://wpaisle.com/wordpress-widgets/free-html-widgets-for-wordpress/) by sam on August 27, 2014
* **Number 8** in [10 Magnificent Free Menus Widgets for WordPress](http://creativevore.com/wordpress/free-menus-widgets-for-wordpress/) by jatin on July 26, 2014

= Demo =
You want to test Purify WordPress Menus before installing on your site? Try it out on your free dummy site and [click here](https://demo.tastewp.com/purify-wp-menues).

= No undesirable visual effects =

The visual appearance of menus and category lists in the frontend remains unchanged in most cases. If you should see an undesirable visual effect to the menus and category lists in your theme, then you can activate the needed CSS classes on the plugin's options page.

= Deactivate it and keep your settings =

If you deactivate the plugin, your settings remains. If you activate the plugin again, your last settings will be used. You do not need to go over all settings again.

= Residue-free deletion =

If you delete the plugin via the WordPress 'Plugin' menu, your settings will be deleted, too. No useless option remains in the WordPress database.

= Default setting: Marks the current menu item only =

The default setting is to output only the CSS classes for the navigation menu items of the current post and the current category.

= Stops displaying CSS classes of parents and ancestors of menu items and category list items =

If activated by yourself, then items which are parents of the current item will not be classified as ancestors additionally. You can set that separately for both menus and category lists.

= Stops displaying CSS classes of outdated page menus =

This plugin filters out the old CSS classes of page menus in navigation menus. Using the WordPress menu configurator the page menu classes are not necessary anymore.

= Stops displaying #menu-{id} =

This plugin deletes the ID attribute of each menu item. In most cases the ID of every menu item is not needed.

= Stops displaying CSS classes of category lists =

This plugin filters out the CSS classes of each item in category lists.

= Uses WordPress standard functions =

This plugin hooks into the WordPress core functions `wp_nav_menu()`, `wp_page_menu()` and `wp_list_categories()`. It changes the results of those functions to the settings you have done.

= Switch on and off every CSS menu item class =

You can:

* select and deselect in detail every CSS menu item class the WordPress core functions `wp_nav_menu()`, `wp_page_menu()` and `wp_list_categories()` generate
* control whether the id attribute of each navigation menu item is printed out or not
* control whether parent items will be additionally classified as ancestors item or not. You can activate to print out both classes on parent items or just parents classes
* control whether navigation menus will be additionally classified with the older page menu classes for compatibility or not.

= Languages =

Purify WordPress Menus is available in multiple languages maintained by the amazing WordPress community.
Your language is missing? Please be part of the community and help to translate Purify WordPress Menus on [GlotPress](https://translate.wordpress.org/projects/wp-plugins/purify-wp-menues/). Thank you!

== Installation ==

= Installation description for WordPress experts =

1. Upload it.
2. Activate it.
3. Relax yourself. If you want, you can refine the plugin's settings to your needs.

= Installation in detail =

1. Download the zip file 'purify-wp-menues.zip' to your local computer.
2. Unzip the zip file. You should find a new directory 'purify-wp-menues' with files and subdirectories in it.
3. Upload the directory 'purify-wp-menues' with all its content per FTP to your '/wp-content/plugins/' directory.
4. Go to the 'Plugins' page in the admin panel of your WordPress site.
5. Activate the plugin through the 'Plugins' menu in WordPress.
6. If you want, you can refine the plugin's output on the option page 'Purify WP Menus'. You will find the page under 'Settings' in the admin panel.

== Frequently Asked Questions ==

= Does the plugin take effects on navigation menus, page menus and category lists? =

Yes, it does.

= Does the plugin take effects on the visual appearance of the menus and the category lists? =

Short answer: Normally not and if yes, you can take control of it.

Long answer: The default settings print out only the CSS class for the active menu items of the current post, page or current category. If the theme's CSS uses also the other CSS classes and/or item ID attributes you will notice some undesirable visual effects on menus and category lists. In this case just find out which classes and/or IDs the theme uses and activate them via the plugin's options page until the effects disappear.

= What are the default settings of this plugin? =

After activating the plugin deletes the id attributes an all CSS classes on every menu item except the CSS classes `.current-menu-item` in navigation menus and `.current_page_item` in page menus.

= What happens with my settings if I would deactivate the plugin through the 'Plugins' menu in WordPress? =

Your settings will be still stored in the WordPress database. After you re-activate the plugin, all your settings are back.

= What happens with my settings if I would delete the plugin through the 'Plugins' menu in WordPress? =

Your settings will be deleted, too. In other words: There would not remain any useless settings of this plugin.

= Would this plugin also deletes the ID attribute of every menu item? =

Yes. It does this way as default. You can activate the output of every menu item's id on the plugin's options page.

= Why is in page menus still the empty attribute `class=""` at every menu item? =

Normally, if you deselect every checkbox for page menus on the plugin's option page, no class attribute should be there in page menus. But the WordPress files do not offer a gentle way to suppress the class attribute if it has no values. The plugin saves time and ressources by not trying an own way. If you would have a trick for deleting the empty class attibute with little effort, then please tell me about it.

= Where is the *.pot file for translating the plugin in any language? =

The translations are handled on WordPress.org. Please be part of the community and help to translate Purify WordPress Menus on [GlotPress](https://translate.wordpress.org/projects/wp-plugins/purify-wp-menues/). Thank you!

== Screenshots ==

1. The first screenshot shows a sample of the results of the HTML output of `wp_nav_menu()` before and after activating the plugin.
2. The second screenshot shows a part of the plugin's option page in the german language.
3. The third screenshot shows where you can find the link to the plugin's option page in the german version of WordPress.

== Changelog ==
= 3.5.0 =
* moved language files to [GlotPress](https://translate.wordpress.org/projects/wp-plugins/purify-wp-menues/). So, please contribute as a translator to make Purify WordPress Menus available in more and more languages.
* bummed required to WordPress 4.6
* tested successfully up to WordPress 6.6

= 3.4.1 =
* added default values for the options introduced in version 3.4
* updated German translation
* tested successfully up to WordPress 6.3-6.5

= 3.4.0 =
* added option 'Print CSS class for each category list item'
* added option 'Print CSS class for each category list item with category ID'
* added option 'Print CSS class for each current category list item'
* added option 'Print CSS class for each current category parent list item'
* added option 'Print CSS class for each current category ancestor list item'
* added option 'Suppress ancestor class at current category parent item'
* tested successfully with WordPress 6.0

= 3.3.3 =
* code improvements
* tested successfully with WordPress 5.8

= 3.3.2 =
* new branding
* tested successfully with WordPress 5.6.2
* tested successfully with WordPress 5.7

= 3.3.1 =
* Added missing default setting
* Improved robustness for missing settings
* Revised settings getter function

= 3.3.0 =
* Added option for menu items pointing to the Privacy Policy page
* Updated translations
* Tested successfully with WordPress 5.5.1

= 3.2.2 =
* Tested successfully with WordPress 5.2.1

= 3.2.1 =
* Added 'Requires PHP' info in readme.txt
* Tested successfully with WordPress 4.9.1

= 3.2 =
* Revised sanitations for texts and URLs on the pages
* Revised translations
* Set activation message as dismissible
* Tested successfully with WordPress 4.8

= 3.1.1 =
* Tested successfully with WordPress 4.7

= 3.1 =
* Revised uninstall function for WordPress 4.6 due to the introduction of WP_Site_Query class
* Tested successfully with WordPress 4.6

= 3.0.5 =
* Changed domain name in translation functions from variable to hard-coded string
* Revised activation message function
* Successfully tested with WordPress 4.5

= 3.0.4 =
* Improved headline hierarchy on options page for better accessibility since WP 4.4
* Successfully tested with WordPress 4.4.2

= 3.0.3 =
* Successfully tested with WordPress 4.4

= 3.0.2 =
* Fixed a bug in readme.txt

= 3.0.1 =
* Successfully tested with WordPress 4.3

= 3.0 =
* Rebuild fundamentally
* Added option 'Current taxonomy ancestor'
* Added option 'Any menu item object'
* Added option 'Any menu item type'
* Added option 'Menu item has children'
* Added option 'Page menu item has children'
* Revised option 'Menu item id as class'
* Revised option 'Page item id as class'
* Removed option 'Custom menu item object'
* Updated translations and *.pot file

= 2.3 =
* Improved: Custom CSS classes keep untouched
* Updated translations and *.pot file

= 2.2.2 =
Successfully tested with WordPress 4.1, especially with the revised filters 'nav_menu_css_class' and 'nav_menu_item_id'

= 2.2.1 =
Successfully tested with WordPress 4.0

= 2.2 =
* Improved uninstall routine
* Tested successfully with WordPress 3.9.2
* Refactored for more compatibility

= 2.1.1 =
* Tested successfully with WordPress 3.8.2
* Some refactoring and fixed a typo
* Updated translations and *.pot file

= 2.1 =
* Some refactoring and tests passed

= 2.0.1 =
* Fixed a coding error

= 2.0 =
* Rebuilded fundamentally to improve the plugin's performance at frontend runtime and your page speed.
* In spite of that no worry about your plugin's settings: They stay untouched and will continue to work
* Better understandable grouping of the options on the options page
* Slight grafic design changes
* Updated translations and *.pot file

= 1.3 =
* Added 'static' property to some functions to prevent warnings at strict error level
* Removed deprecated use of screen_icon()
* Corrected typo 'menues' to 'menus'
* Checked compatibilty with WP 3.8

= 1.2 =
* Fixed a typo
* Added spanish translation. Thank you, Hector!

= 1.1 =
* Improved performance: Hooks in to 'nav_menu_item_id' only when desired instead of every time
* Some improved translation into german
* Improved labeling on options page
* Refined POT file

= 1.0 =
* The plugin was released initially.

== Upgrade Notice ==

= 3.5.0 =
We switched the languages file support to WordPress.org and bummed the required WordPress version to 4.6..

= 3.4.1 =
Added default values for the options introduced in version 3.4

= 3.4 =
Added options for category lists and tested with WordPress 6.0

= 3.3.3 =
Some code improvements and prepared for WordPress 5.8

= 3.3.1 =
Added missing default setting, revised settings getter function

= 3.3.0 =
Added option for the Privacy Policy page, updated translations, tested with WordPress 5.5.1

= 3.2.2 =
Tested with WordPress 5.2.1

= 3.2.1 =
Added Requires PHP info in readme.txt, tested with WordPress 4.9.1

= 3.2 =
Revised sanitations and translations, tested with WordPress 4.8

= 3.1.1 =
Tested with WordPress 4.7

= 3.1 =
Revised uninstall function and tested with WordPress 4.6

= 3.0.5 =
Revised activation message function, tested with WP 4.5

= 3.0.4 =
Improved headline hierarchy on options page for better accessibility since WP 4.4

= 3.0.3 =
Successfully tested with WordPress 4.4

= 3.0.2 =
Fixed a bug in readme.txt

= 3.0.1 =
Successfully tested with WordPress 4.3

= 3.0 =
Rebuild fundamentally and enhanced with new options

= 2.3 =
Improved: Custom CSS classes keep untouched

= 2.2.2 =
Successfully tested with WordPress 4.1

= 2.2.1 =
Successfully tested with WordPress 4.0

= 2.2 =
Improved uninstall routine, tested with WordPress 3.9.2

= 2.1.1 =
Tested with WordPress 3.8.2 and corrected a typo

= 2.1 =
* Some refactoring and tests passed

= 2.0.1 =
* Fixed a coding error

= 2.0 =
* Fundamental rebuild for higher page speed
* More understandable grouping of the options

= 1.3 =
* Added slight corrections

= 1.2 =
* Added spanish translation. Thank you, Hector!


= 1.1 =
* Improved performance and german translation

= 1.0 =
No upgrade necessary.
