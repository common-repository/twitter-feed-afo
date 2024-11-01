<?php
/*
Plugin Name: Recent Tweet Widget
Plugin URI: https://wordpress.org/plugins/twitter-feed-afo/
Description: This is a recent twitter feed widget. This plugin will allow you to display recent tweets to your widget area. This plugin is compatible with api v1.1. so no warries. :)
Version: 2.2.9
Author: aviplugins.com
Author URI: https://www.aviplugins.com/
*/

/*
	  |||||   
	<(`0_0`)> 	
	()(afo)()
	  ()-()
*/

define('RTW_DIR_NAME', 'twitter-feed-afo');
define('RTW_DIR_PATH', dirname(__FILE__));

function rtw_plug_install() {
    include_once RTW_DIR_PATH . '/includes/class-settings.php';
    include_once RTW_DIR_PATH . '/includes/class-scripts.php';
    include_once RTW_DIR_PATH . '/includes/class-tweets.php';
    include_once RTW_DIR_PATH . '/tweet-widget.php';
    include_once RTW_DIR_PATH . '/tweet-shortcode.php';
    include_once RTW_DIR_PATH . '/twitteroauth/twitteroauth.php';
    new Tweet_Settings;
    new Tweet_Scripts;
}

class RTW_Plugin_Init {
    function __construct() {
        rtw_plug_install();
    }
}
new RTW_Plugin_Init;

add_action('plugins_loaded', 'recent_tweet_afo_text_domain');

function recent_tweet_afo_text_domain() {
    load_plugin_textdomain('twitter-feed-afo', FALSE, basename(dirname(__FILE__)) . '/languages');
}

add_action('widgets_init', function () {register_widget('Tweet_Wid');});

add_shortcode('tweets', 'tweets_shortcode_function');
