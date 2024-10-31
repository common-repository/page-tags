=== Page Tags ===
Contributors: rui.dacosta
Tags: tags, pages
Requires at least: 2.0
Tested up to: 2.5
Stable tag: 0.2

Easy tag function for any page.

== Description ==

This plugin adds the function `get_page_tags` which allows you to get an array of tag objects for any page or post you want.

Usage:

`<?php`
`$tags = get_page_tags($post->ID);`
`foreach($tags as $tag)`
`{`
`	echo '<li id="tag-'.$tag->term_id.'"><a href="/'.$tag->slug.'">'.$tag->name.' ('.$tag->count.')</a></li>';`
`}`
`?>`

The array contains tag objects identical to the tag objects returned by the `get_the_tags()` [Template Function](http://codex.wordpress.org/Template_Tags/get_the_tags "get_the_tags").

== Installation ==

1. Upload `pagetags.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Call `get_page_tags(page/post id)` in your templates
1. Use the returned array however you want

== Frequently Asked Questions ==

No questions asked yet.  Fire away.