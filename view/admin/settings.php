<form name="f" method="post" action="">
<input type="hidden" name="option" value="tweet_widget_afo_save_settings" />
 <?php wp_nonce_field( 'tweet_widget_afo_save_action', 'tweet_widget_afo_save_action_field' ); ?>
<table width="100%" border="0" class="ap-table">
  <tr>
    <td colspan="2"><h3><?php _e('Recent Tweets Widget Settings','twitter-feed-afo'); ?></h3></td>
  </tr>
  <tr>
    <td width="300"><strong><?php _e('Twitter Username', 'twitter-feed-afo');?> <font color="red">(<?php _e('required', 'twitter-feed-afo');?>)</font></strong></td>
    <td><input type="text" name="afo_twitteruser" value="<?php echo $afo_twitteruser;?>" class="widefat"/></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
   <tr>
    <td><strong><?php _e('No of Tweets', 'twitter-feed-afo');?> </strong></td>
     <td><input type="number" name="afo_notweets" value="<?php echo $afo_notweets;?>" />&nbsp;<?php _e('Default is 5', 'twitter-feed-afo');?></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
   <tr>
    <td><strong><?php _e('Consumer Key', 'twitter-feed-afo');?> <font color="red">(<?php _e('required', 'twitter-feed-afo');?>)</font></strong></td>
     <td><input type="text" name="afo_consumerkey" value="<?php echo $afo_consumerkey;?>" class="widefat" /></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
   <tr>
    <td><strong><?php _e('Consumer Secret', 'twitter-feed-afo');?> <font color="red">(<?php _e('required', 'twitter-feed-afo');?>)</font></strong></td>
     <td><input type="text" name="afo_consumersecret" value="<?php echo $afo_consumersecret;?>" class="widefat" /></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td><strong><?php _e('Access Token', 'twitter-feed-afo');?> <font color="red">(<?php _e('required', 'twitter-feed-afo');?>)</font></strong></td>
     <td><input type="text" name="afo_accesstoken" value="<?php echo $afo_accesstoken;?>" class="widefat" /></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td><strong><?php _e('Access Token Secret', 'twitter-feed-afo');?> <font color="red">(<?php _e('required', 'twitter-feed-afo');?>)</font></strong></td>
     <td><input type="text" name="afo_accesstokensecret" value="<?php echo $afo_accesstokensecret;?>" class="widefat" /></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" value="<?php _e('Save', 'twitter-feed-afo');?>" class="button button-primary button-large button-ap-large" /></td>
  </tr>
  <tr>
    <td><strong><?php _e('Shortcode', 'twitter-feed-afo');?> [tweets]</strong></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><h3><?php _e('How To Get Twitter API Keys','twitter-feed-afo'); ?></h3></td>
  </tr>
  <tr>
    <td colspan="2"><strong>A new <a href="https://twitter.com/" target="_blank">twitter</a> APP needs to be created to get API Keys</strong> <br />
    <p>1. Please log in to <a href="https://apps.twitter.com/" target="_blank">https://apps.twitter.com/</a> with your twitter account <strong>Username</strong> and <strong>Password</strong>. </p>
    <p>2. And click on the <strong>Create new app</strong> button.</p>
    <p>3. A new window will open. Enter all the relevant data, and follow the instructions. Your new app will be created.</p>
    <p>4. Now on the <strong>API Keys</strong> tab you will get all the data required for the plugin to work.</p>
</td>
  </tr>
</table>
</form>