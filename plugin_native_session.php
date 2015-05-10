<?php
/**
 * Plugin Name: Wordpress Native Session.
 * Plugin URI: https://github.com/phplaw/wordpress-tips-tricks
 * Description: This plugin was create for turning on Native Session for wordpress site.
 * Version: 1.0.0
 * Author: Sonny Nguyen
 * Author URI: http://github.com/phplaw
 * Text Domain: Optional. Plugin's text domain for localization. Example: mytextdomain
 * Domain Path: Optional. Plugin's relative directory path to .mo files. Example: /locale/
 * Network: Optional. Whether the plugin can only be activated network wide. Example: true
 * License: Plugin is not for sale
 */
add_action('init', 'myStartSession', 1);
add_action('wp_logout', 'myEndSession');
add_action('wp_login', 'myEndSession');

function myStartSession() {
    if(!session_id()) {
        session_start();
    }
}

function myEndSession() {
    session_destroy ();
}
