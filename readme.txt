=== autometa's URLUG ===
Contributors: JorgeAmVF
Donate link: https://quaestio.org/
Tags: shortcode, automation, metadata, slug, permalink
Requires at least: 3.0.0
Tested up to: 4.9.2
Stable Tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

It reproduces slugs, permalinks and links in posts, portfolios or products simply via: `[urlug]` and `[urlink]` and `[urlinked]`.
== Description ==

**autometa's URLUG** is a simple plugin that uses the following shortcodes:

* `[urlug]`    = to reproduce the URL slug;
* `[urlink]`   = to reproduce the URL permalink;
* `[urlinked]` = to reproduce the URL link.

**autometa's URLUG** is a standalone component of **[autometa](https://wordpress.org/plugins/autometa/)** shortcodes pack.

== Installation ==

1. Install it from *Dashboard*/*Plugins*/*Add Plugins* or download it to your plugin folder;
2. Activate it from *Dashboard*/*Plugins*/*Installed Plugins*;
3. Write the following shortcodes in text fields: `[urlug]`, `[urlink]`, `[urlinked]`.

== Frequently Asked Questions ==

= Plugin Features =

**[autometa](https://wordpress.org/plugins/autometa/)** reproduces metadata information automatically via shorcodes in general, **autometa's URLUG** reproduces URL-related data in special.

= How To =

Just write one or more of the following shortcodes inside a text field and between brackets as usual: `[urlug]` and/or `[urlink]` and/or `[urlinked]`.

= CSS Style Selectors =

* `#urlug`    = `[urlug]` ID;
* `#urlink`   = `[urlink]` ID;
* `#urlinked` = `[urlinked]` ID;
* `.autometa` = **autometa** class.

= PHP Functions Reference =

* [`add_shortcode()`](https://developer.wordpress.org/reference/functions/add_shortcode/)
* [`get_permalink()`](https://developer.wordpress.org/reference/functions/get_permalink/)
* [`get_post_permalink()`](https://developer.wordpress.org/reference/functions/get_post_permalink/)
