=== WP Simple Thimble ===
Contributors: aadel112
Tags: page load, speed, data-uri, eliminate gtmetrix warnings, eliminate yslow warnings
Donate link: https://www.paypal.me/aadel112/5
License: GPL V3
License URI: https://github.com/aadel112/WP-Simple-Thimble/blob/master/LICENSE

This plugin embeds or in-lines image/css/js content into the page before it's loaded. This really improves page load speed scores, and can really improve    actual load time if either the network connection is not blazingly fast, server side caching is used, or a combination of the two.

== Description ==
This plugin embeds or in-lines image/css/js content into the page before it's loaded. This really improves page load speed scores, and can really improve    actual load time if either the network connection is not blazingly fast, server side caching is used, or a combination of the two.

Warnings that are commonly eliminated in page load speed testing tools include

Optimize images
Leverage browser caching
Remove query strings from static resources
Specify image dimensions
Minify JavaScript
Minify HTML
Avoid bad requests
Avoid a character set in the meta tag
Avoid landing page redirects
Defer parsing of JavaScript
Inline small CSS
Inline small JavaScript
Minify CSS
Minimize request size
Optimize the order of styles and scripts
Put CSS in the document head
Serve resources from a consistent URL
Serve scaled images
Avoid CSS @import
Combine images using CSS sprites
Use a Content Delivery Network (CDN)
Reduce the number of DOM elements
Make fewer HTTP requests
Minify JavaScript and CSS
Put CSS at the top
Put JavaScript at bottom
Avoid AlphaImageLoader filter
Avoid CSS expressions
Reduce DNS lookups

The cases where some of these may still pop up would be a limitation of this project https://github.com/aadel112/simple-thimble, and you'll note that these  are all limitations that are actively being developed to be fixed.

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload the plugin files to the `/wp-content/plugins/wp-simple-thimble` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress

= Frequently Asked Questions =

= I still see resources that weren't embedded. What is the cause? =

Right now the project this plugin depends on https://github.com/aadel112/simple-thimble only handles images/css/js files, and it only handles resources      found directly in the document. Furthermore, this plugin only handles js and css files that are properly enqueued. These are issues that will be remedied in future releases.
