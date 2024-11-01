<?php

function tweets_shortcode_function() {
    $apt = new Tweets_Class;
    $ret = $apt->getTweets();
    return $ret;
}
