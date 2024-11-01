<?php

class Tweet_Wid extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'tweet_wid',
            'Recent Tweets',
            array('description' => __('Display recent tweets in widget', 'twitter-feed-afo'))
        );
    }

    public function widget($args, $instance) {
        extract($args);
        $wid_title = apply_filters('widget_title', $instance['wid_title']);
        $apt = new Tweets_Class;

        echo $args['before_widget'];
        if (!empty($wid_title)) {
            echo $args['before_title'] . $wid_title . $args['after_title'];
        }

        echo $apt->getTweets();
        echo $args['after_widget'];
    }

    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['wid_title'] = strip_tags($new_instance['wid_title']);
        return $instance;
    }

    public function form($instance) {
        $wid_title = @$instance['wid_title'];
        ?>
		<p><label for="<?php echo $this->get_field_id('wid_title'); ?>"><?php _e('Title:');?> </label>
		<input class="widefat" id="<?php echo $this->get_field_id('wid_title'); ?>" name="<?php echo $this->get_field_name('wid_title'); ?>" type="text" value="<?php echo $wid_title; ?>" />
		</p>
		<?php
}

}
