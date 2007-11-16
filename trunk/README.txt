=== Wordpress Plugin Framework ===
Contributors: husterk
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=husterk%40doubleblackdesign%2ecom&item_name=Wordpress%20Plugin%20Framework&no_shipping=0&no_note=1&tax=0&currency_code=USD&lc=US&bn=PP%2dDonationsBF&charset=UTF%2d8
Tags: wordpress, plugin framework, plugin development
Requires at least: 2.3
Tested up to: 2.3.1
Stable tag: 0.03a

The Wordpress Plugin Framework plugin is a simple plugin used to demonstrate the capabilities of the Wordpress Plugin Framework (WPF) class.

== Description ==

The Wordpress Plugin Framework plugin is used as a playground for demonstrating the features and capabilities of the Wordpress Plugin
Framework (WPF) class. The WPF is a PHP class that is used to provide a framework for the development of Wordpress plugins.
This framework helps to generalize and simplify plugin design while also helping plugins adhere to a common administration
and usage standard.

Currently, the Wordpress Plugin Framework plugin demonstrates the features of the WPF listed below.

1. Deriving a plugin from the WordpressPluginFramework base class.
2. Creating options for the plugin.
3. Initializing the plugin.
4. Creating content blocks for the plugin's administration page.
5. Registering the plugin's administration page with Wordpress.
6. Updating and resetting of the plugin's options.
7. Uninstallation of the plugin.

= License =

This Wordpress Plugin Framework plugin and Wordpress Plugin Framework class are being developed under the GNU General Public License, version 2.

[GNU General Public License, version 2](http://www.gnu.org/licenses/old-licenses/gpl-2.0.html "GNU General Public License, version 2")

= Support WPF Development =

Help support development of the Wordpress Plugin Framework plugin and Wordpress Plugin Framework by making a donation.

[Donate to Double Black Design](https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=husterk%40doubleblackdesign%2ecom&item_name=Wordpress%20Plugin%20Framework&no_shipping=0&no_note=1&tax=0&currency_code=USD&lc=US&bn=PP%2dDonationsBF&charset=UTF%2d8 "Donate to Double Black Design")

= Project Location =

The Wordpress Plugin Framework plugin and Wordpress Plugin Framework projects are currently developed as a Google Code project. A link to the WPF Google
Code project is provided below.

[Wordpress Plugin Framework Project](http://code.google.com/p/wordpress-plugin-framework/ "Wordpress Plugin Framework Project")

== Installation ==

1. Unzip the archive file.
2. Verify the name of the unzipped folder to be "wpf-test-plugin".
3. Upload the "wpf-test-plugin" folder to your Wordpress plugins folder.
4. Activate the "Wordpress Plugin Framework" in the Wordpress plugins administration page.

== Frequently Asked Questions ==

= What is the Wordpress Plugin Framework plugin and the Wordpress Plugin Framework class? =

The Wordpress Plugin Framework (WPF) class is a framework used for the development and implementation of Wordpress plugins. The
Wordpress Plugin Framework plugin is a simple plugin used to demonstrate the features and capabilities of the WPF.

= Do I need to modify the wordpress-plugin-framework.php file? =

Yes. There you will need to prefix the WordpressPluginFramework class name with the name of your plugin in order to prevent class
duplication errors within the Wordpress core.
   - i.e. "class WordpressPluginFramework" -> "class YourPluginName_WordpressPluginFramework".
   
You will also need to update a small section of class constants that are specific to your plugin. These constants are wrapped
with a special set of comments that are detailed below. NOTE: No other portions of the "wordpress-plugin-framework.php" file
should be modified for your plugin. If you have a need for a new feature or if you have discovered and issue with the WPF then
please let me know about it by posting the issue on the [Wordpress Plugin Framework Forum](http://doubleblackdesign.com/forums/wordpress-plugin-framework/0/ "Wordpress Plugin Framework Forum")
   
== Screenshots ==

Screenshots are not currently available at this time.

== Change Log ==

* 0.03 (TBD) - In progress...

* v0.02 (11/07/2007) - Updated to support more option types as well as added ability to update & reset plugin option values. Also added the ability to completely uninstall the plugin directly from the plugin's administration page.

* v0.01 (11/01/2007) - Initial release of the WPF and WPF-TestPlugin.
