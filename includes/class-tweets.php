<?php
class Tweets_Class {
	
	public function getConnectionWithAccessToken( $cons_key, $cons_secret, $oauth_token, $oauth_token_secret ) {
	  $connection = new TwitterOAuth( $cons_key, $cons_secret, $oauth_token, $oauth_token_secret );
	  return $connection;
	}
	
	public function tweet_char_limit( $data = '', $limit = ''){
		if( empty( $data )){ return false; }
		if( empty( $limit )){ return $data; }
		
		$total_count = strlen( $data );
		if( $total_count <= $limit ){
			return $data;
		} else {
			return substr( $data, 0, $limit ) . '..';
		}
	}
	
	public function getTweets(){
		$afo_twitteruser = get_option('afo_twitteruser');
		$afo_notweets = get_option('afo_notweets');
		$afo_consumerkey = get_option('afo_consumerkey');
		$afo_consumersecret = get_option('afo_consumersecret');
		$afo_accesstoken = get_option('afo_accesstoken');
		$afo_accesstokensecret = get_option('afo_accesstokensecret');
		if( empty($afo_notweets) ){	$afo_notweets = 5; }
		if( empty($afo_twitteruser) || empty($afo_consumerkey) || empty($afo_consumersecret) || empty($afo_accesstoken) || empty($afo_accesstokensecret) ){	
			$ret = '<p>' . __('Error: Keys not found!', 'twitter-feed-afo') . '</p>'; 
		} else {
			$connection = $this->getConnectionWithAccessToken($afo_consumerkey, $afo_consumersecret, $afo_accesstoken, $afo_accesstokensecret);
			$tweets = $connection->get( "https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name={$afo_twitteruser}&count={$afo_notweets}");
			if( is_array( $tweets ) ){
				$tweets = array_filter($tweets);
			}
			ob_start();
			include( RTW_DIR_PATH . '/view/frontend/widget.php' );
			$ret = ob_get_contents();
        	ob_end_clean();
		}
		return $ret;
	}
}

