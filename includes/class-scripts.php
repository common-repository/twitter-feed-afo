<?php
class Tweet_Scripts {

    public function __construct() {
        add_action('admin_enqueue_scripts', array($this, 'register_plugin_styles_admin'));
        add_action('wp_enqueue_scripts', array($this, 'register_plugin_styles'));
    }

    public function register_plugin_styles_admin() {
        wp_enqueue_style('style_tweet_admin', plugins_url(RTW_DIR_NAME . '/css/style_tweet_admin.css'));
    }

    public function register_plugin_styles() {
        wp_enqueue_style('style_tweet_widget', plugins_url(RTW_DIR_NAME . '/css/style_tweet_widget.css'));
    }

}
