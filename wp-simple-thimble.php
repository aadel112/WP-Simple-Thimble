<?php
/**
 * Plugin Name: WP Simple Thimble
 * Plugin URI: http://aadel112.com
 * Description: This plugin embeds resources as data-uris. For ie 8, it just embeds images, and for ie 7 and below, it falls back to the normal document.    Mostly eliminates all warnings given by page load speed testing tools such as gtmetrix and yslow. This plugin is fast by itslef, and minimal, just activate  and that's it. However, WP Simple Thimble is best complimented by a server-side caching plugin, such as WP Super Cache or W3 Total Cache.
 * Version: 0.0.1
 * Author: Aaron Adel
 * Author URI: http://aadel112.com
 * License: GPL 3.0
 */
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

include_once( __DIR__ . '/lib/simple-thimble.php');

wp_simplethimble_main();

function wp_simplethimble_scripts( $tag, $handle, $src ) {
    $st = SimpleThimble::create();
    if( $st->browser_limited() || $st->browser_none() ) {
        return $tag;
    } else {
        $data = SimpleThimble::get_uri( $src );
        return str_replace( $src, $data, $tag );
    }
}

function wp_simplethimble_styles( $tag, $handle, $href ) {
    $st = SimpleThimble::create();
    if( $st->browser_limited() || $st->browser_none() ) {
        return $tag;
    } else {
        $data = SimpleThimble::get_uri( $href );
        return str_replace( $href, $data, $tag );
    }
}

function wp_simplethimble_content( $content ) {
    return SimpleThimble::create( array(), $content )->embed()->html();
}

function wp_simplethimble_main() {
    add_filter( 'style_loader_tag', 'wp_simplethimble_styles', 999, 3 );
    add_filter( 'script_loader_tag', 'wp_simplethimble_scripts', 999, 3 );
    add_filter( 'the_content', 'wp_simplethimble_content' );
}
