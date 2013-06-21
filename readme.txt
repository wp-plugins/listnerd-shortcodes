=== Listnerd Shortcodes ===
Contributors: CodeIT
Tags: shortcode, post content, listnerd, embed
Requires at least: 3.0
Tested up to: 3.6
Stable tag: 0.1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Adds shortcodes to display the content of a Lists from www.listnerd.com website

== Description ==

This plugin adds shortcode that allow you to display the content of a Lists from www.listnerd.com website(Listnerd is a list blogging platform. Users can create, share and discover interesting lists about the stuff in their life they care about). 

You may embed your own lists from www.listnerd.com or lists created by somebody else by copying Lists URL, then paste this URL to shortcode, e.g.:

[list http://www.listnerd.com/list/top-10-video-games]

If you need to change size of embed lists frame you may use optional params width and height. You can use integer values e.g.:

[list http://www.listnerd.com/list/top-10-video-games width="400" height="600"]

Or you can use per cent values, e.g.:

[list http://www.listnerd.com/list/top-10-video-games width="50%" height="400"]

== Installation ==

= Automatic Installation =

The easiest way to install this plugin automatically from within your administration area.

1. Go to Plugins > Add New in your administration area, then search for the plugin "Listnerd Shortcodes".
1. Click the "Install" button.
1. Go to the Plugins dashboard and "Activate" the plugin.

= Manual Installation =

If that doesn't work, or if you prefer to install it manually, you have two options.

**Upload the ZIP**

1. Download the ZIP file from the WordPress plugin repository.
1. Go to Plugins > Add New > Upload in your administration area.
1. Click the "Browse" (or "Choose File") button and find the ZIP file you downloaded.
1. Click the "Upload" button.
1. Go to the Plugins dashboard and "Activate" the plugin.

**FTP Installation**

1. Download the ZIP file from the WordPress plugin repository.
1. Unzip the file somewhere on your harddrive.
1. FTP into your Web server and navigate to the /wp-content/plugins directory.
1. Upload the listnerd folder and all of its contents into your plugins directory.
1. Go to the Plugins dashboard and "Activate" the plugin.

== Frequently asked questions ==

= How do I use this plugin? =

To display the content of a single List from www.listnerd.com within your WordPress post, you want to use the `[list]` shortcode. To display the content of the `http://www.listnerd.com/list/favourite-character-in-game-of-thrones-%28the-tv-series%29`, the usage would look like:
[list http://www.listnerd.com/list/favourite-character-in-game-of-thrones-%28the-tv-series%29 ]

= Does the shortcode output any extra HTML? =

Yes, the [list] shortcode will output iframe with simplified list from www.listnerd.com

= How do I change the HTML output for the list? =

You can use `width` and `height` params in shortcode with integer of per cent values. For example yor need to embed your list with height equal 600px and width 60% the usage would look like:
[list http://www.listnerd.com/list/favourite-character-in-game-of-thrones-%28the-tv-series%29 height="600" width="60%"]

== Screenshots ==

1. Screenshot shows the example embed list from www.listnerd.com

== Changelog ==

== Upgrade Notice === 0.1.0 =

This is the initial release.