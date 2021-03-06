=== Plugin Name ===
Contributors: mateuszgbiorczyk
Donate link: https://www.paypal.me/mateuszgbiorczyk/
Tags: acf, acf search, advanced custom fields, better search, search
Requires at least: 3.6.0
Tested up to: 4.8.0
Stable tag: 2.0.7
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

This plugin adds to default WordPress search engine the ability to search by content from selected fields of Advanced Custom Fields PRO plugin.

== Description ==

This plugin adds to default WordPress search engine the ability to search by content from selected fields of Advanced Custom Fields PRO plugin.

Everything works automatically, no need to add any additional code.

**New feature:** Now you can search for whole phrases instead of each single word of phrase. As a result, search will be more accurate than before.

== Installation ==

1. Upload the plugin files to `/wp-content/plugins/acf-better-search` directory, or install plugin through the WordPress plugins screen directly.
2. Activate plugin through `Plugins` screen in WordPress Admin Panel.
3. Use `Settings -> ACF: Better Search` screen to configure the plugin.

== Frequently Asked Questions ==

= How does this work? =

Plugin changes all SQL queries by extending the standard search to selected fields of Advanced Custom Fields.

= Where working advanced search? =

It works for WP_Query class.

= Do I need to add some arguments to my function to activate advanced search? =

On search page everythings works automatically. For custom WP_Query loop also if you add [Search Parameter](https://codex.wordpress.org/Class_Reference/WP_Query#Search_Parameter).

= In what fields does the plugin search? =

Our plugin supports the following fields: Text, Text Area, Number, Email, Url, Wysiwyg Editor, Select, Checkbox and Radio Button. All these fields may be located in both the Repeater or Flexible Content field.

= How does searching for whole phrases? =

The default search in WordPress is to search for each of words listed. This feature allows you to search for occurrences of the whole phrase entered in the search field without word division.

= What version of Advanced Custom Fields is supported? =

All versions of Advanced Custom Fields PRO. ACF below version 5 has a different data structure in database and is not supported.

== Screenshots ==

1. Screenshot of the options panel

== Changelog ==

= 2.0.7 =
* Turn off plugin core while searching uploads media items

= 2.0.6 =
* Support for WordPress Multisite

= 2.0.5 =
* Changed closing notice in admin panel

= 2.0.4 =
* Support for WP AJAX
* Changed access to settings page

= 2.0.3 =
* Improved text search with apostrophe and quotation marks

= 2.0.2 =
* Withdrawal of support for get_posts()

= 2.0.1 =
* Fixes for PHP 7

= 2.0.0 =
* Improve search engine
* The ability to search whole phrases
* Changed plugin settings page
* Notifications in admin panel

= 1.0.0 =
* The first stable release