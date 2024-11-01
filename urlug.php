<?php
/*
* Plugin Name: autometa's URLUG
* Description: It reproduces slugs, permalinks and links of pages, posts, portfolios or products simply via: [urlug] and [urlink].
* Version: 2.2
* Author: JorgeAmVF
* Author URI: https://profiles.wordpress.org/jorgeamvf/
* License: GPL2

autometa's URLUG is developed by JorgeAmVF in order to improve the quality of Quaestio.org
and it is freely provided with the intent to help other developers to fulfill
their needs.

autometa's URLUG is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

autometa's URLUG is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with autometa's URLUG. If not, see http://www.gnu.org/licenses/old-licenses/gpl-2.0.html.
*/

// [urlug] = URL slug
function autometa_url_slug() {
	$am_urlug = '<span id="urlug" class="autometa">' . get_permalink() . '</span>';
	return $am_urlug;
}
add_shortcode( "urlug", "autometa_url_slug" );

// [urlink] = URL permalink
function autometa_url_permalink() {
	$am_urlink = '<span id="urlink" class="autometa">' . get_post_permalink() . '</span>';
	return $am_urlink;
}
add_shortcode( "urlink", "autometa_url_permalink" );

// [urlinked] = URL link
function autometa_url_link() {
	$am_urlinked = '<span id="urlinked" class="autometa"><a href="' . get_permalink() . '">' . get_permalink() . '</a></span>';
	return $am_urlinked;
}
add_shortcode( "urlinked", "autometa_url_link" );
?>
