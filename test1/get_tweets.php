<?php
require_once('twitter_proxy.php');
// Twitter OAuth Config options
$oauth_access_token = '22417002-sjVPWcCXuobP5fvb4NIQSv3KiKUakWHgFoHBuAsoZ';
$oauth_access_token_secret = 'DUmRu3JYS8uygtRUKxcLhCVkbCY96g7cZSh2WQVut6rxg';
$consumer_key = 'cLBOUhBAhNBofJPhRGVuWOBWf';
$consumer_secret = 'CUMtdeX91Z0JwpY6Jq0X90aZvwW10MeSiLZ7jEcIAmw2nhMYa2';
$user_id = '22417002';
$screen_name = 'bilalasd';
$count = 5;
$twitter_url = 'statuses/user_timeline.json';
$twitter_url .= '?user_id=' . $user_id;
$twitter_url .= '&screen_name=' . $screen_name;
$twitter_url .= '&count=' . $count;
// Create a Twitter Proxy object from our twitter_proxy.php class
$twitter_proxy = new TwitterProxy(
	$oauth_access_token,			// 'Access token' on https://apps.twitter.com
	$oauth_access_token_secret,		// 'Access token secret' on https://apps.twitter.com
	$consumer_key,					// 'API key' on https://apps.twitter.com
	$consumer_secret,				// 'API secret' on https://apps.twitter.com
	$user_id,						// User id (http://gettwitterid.com/)
	$screen_name,					// Twitter handle
	$count							// The number of tweets to pull out
);
// Invoke the get method to retrieve results via a cURL request
$tweets = $twitter_proxy->get($twitter_url);
echo $tweets;
?>
