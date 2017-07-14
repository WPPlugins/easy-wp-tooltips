=== Easy WP Tooltips ===
Contributors: WouterPostmaNL
Tags: tooltip, css, tooltips
Requires at least: 3.0.1
Tested up to: 4.8
Stable tag: 1.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Add tooltips to your content easily using a simple shortcode!

== Description ==

This plugin uses the [Simple CSS tooltips](https://chrisbracco.com/a-simple-css-tooltip/) by Chris Bracco and a shortcode to create simple tooltips. You can define a link, tooltip location and more in the shortcode.

* [View my other plugins](https://profiles.wordpress.org/wouterpostmanl#content-plugins)

To add a tooltip to your website, please install and activate the plugin.
Then use the shortcode to add a tooltip:

`
[tooltip text="The tooltip"]The text[/tooltip]
`

The above shortcode will add a simple tooltip on top of "The text".
If you want to include a link or change the location of the tooltip, this is possible by using the following attributes in your shortcode:

`
[tooltip text="The tooltip" location="right" href="https://example.com/" rel="nofollow"]The text[/tooltip]
`

The location can either be top, right, left or bottom. If you don't enter a location, the default location (top) will be used.
As you can see it is also possible to add rel="nofollow" to your link.
If you don't enter a link, the text will link to "#".


== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Done!

== Frequently Asked Questions ==

