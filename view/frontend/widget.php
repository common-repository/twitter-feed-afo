<div class="ap-tweets-cont">
<?php
if( is_array($tweets) and count($tweets) > 0){ ?>
    <ul class="ap-tweets">
        <?php 
        foreach($tweets as $key => $value){
            $datetoshow = date("M j, Y", strtotime($value->created_at));
            ?>
           <li>
            <a href="https://twitter.com/<?php echo $afo_twitteruser;?>/status/<?php echo $value->id_str;?>" target="_blank"><?php echo $this->tweet_char_limit( $value->text, apply_filters( 'ap_tweet_char_limit', '' ) );?></a>
            <div class="ap-tweet-post-date"><?php echo $datetoshow;?></div>
           </li>
        <?php
        }
        ?>
    </ul>
    <div class="ap-tweet-user"><a href="https://twitter.com/<?php echo $afo_twitteruser;?>" target="_blank">Follow @<?php echo $afo_twitteruser;?></a></li>
<?php 
} else {
	echo '<p>' . __('Sorry. No tweets found!', 'twitter-feed-afo') . '</p>';
}
?>
</div>