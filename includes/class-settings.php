<?php
class Tweet_Settings {

    public function __construct() {
        $this->load_settings();
    }

    public function show_message() {
        if (isset($GLOBALS['msg'])) {
            echo '<div class="updated"><p>' . $GLOBALS['msg'] . '</p></div>';
            unset($GLOBALS['msg']);
        }
    }

    public function tweet_widget_afo_options() {
        global $wpdb;
        $afo_twitteruser = get_option('afo_twitteruser');
        $afo_notweets = get_option('afo_notweets');
        $afo_consumerkey = get_option('afo_consumerkey');
        $afo_consumersecret = get_option('afo_consumersecret');
        $afo_accesstoken = get_option('afo_accesstoken');
        $afo_accesstokensecret = get_option('afo_accesstokensecret');
        echo '<div class="wrap">';
        $this->show_message();
        $this->help_support();
        include RTW_DIR_PATH . '/view/admin/settings.php';
        $this->donate();
        echo '</div>';
    }

    public function help_support() {
        include RTW_DIR_PATH . '/view/admin/help-support.php';
    }

    private function donate() {
        include RTW_DIR_PATH . '/view/admin/donate.php';
    }

    public function tweet_widget_afo_menu() {
        add_options_page('Recent Tweets Widget', 'Twitter Widget Settings', 'activate_plugins', 'tweet_widget_afo_menu', array($this, 'tweet_widget_afo_options'));
    }

    public function tweet_widget_afo_save_settings() {
        if (isset($_POST['option']) and sanitize_text_field($_POST['option']) == "tweet_widget_afo_save_settings") {

            if (!isset($_POST['tweet_widget_afo_save_action_field']) || !wp_verify_nonce($_POST['tweet_widget_afo_save_action_field'], 'tweet_widget_afo_save_action')) {
                wp_die('Sorry, your nonce did not verify.');
            }

            if (isset($_POST['afo_twitteruser'])) {
                update_option('afo_twitteruser', sanitize_text_field($_POST['afo_twitteruser']));
            } else {
                delete_option('afo_twitteruser');
            }

            if (isset($_POST['afo_notweets'])) {
                update_option('afo_notweets', sanitize_text_field($_POST['afo_notweets']));
            } else {
                delete_option('afo_notweets');
            }

            if (isset($_POST['afo_consumerkey'])) {
                update_option('afo_consumerkey', sanitize_text_field($_POST['afo_consumerkey']));
            } else {
                delete_option('afo_consumerkey');
            }

            if (isset($_POST['afo_consumersecret'])) {
                update_option('afo_consumersecret', sanitize_text_field($_POST['afo_consumersecret']));
            } else {
                delete_option('afo_consumersecret');
            }

            if (isset($_POST['afo_accesstoken'])) {
                update_option('afo_accesstoken', sanitize_text_field($_POST['afo_accesstoken']));
            } else {
                delete_option('afo_accesstoken');
            }

            if (isset($_POST['afo_accesstokensecret'])) {
                update_option('afo_accesstokensecret', sanitize_text_field($_POST['afo_accesstokensecret']));
            } else {
                delete_option('afo_accesstokensecret');
            }

            $GLOBALS['msg'] = 'Settings saved successfully.';
        }
    }

    public function load_settings() {
        add_action('admin_menu', array($this, 'tweet_widget_afo_menu'));
        add_action('admin_init', array($this, 'tweet_widget_afo_save_settings'));
    }

}
