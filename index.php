<?php
require_once('TwitterAPIExchange.php');
 
/** Set access tokens here - see: https://dev.twitter.com/apps/ */
$settings = array(
    'oauth_access_token' => "22417002-sjVPWcCXuobP5fvb4NIQSv3KiKUakWHgFoHBuAsoZ",
    'oauth_access_token_secret' => "DUmRu3JYS8uygtRUKxcLhCVkbCY96g7cZSh2WQVut6rxg",
    'consumer_key' => "cLBOUhBAhNBofJPhRGVuWOBWf",
    'consumer_secret' => "CUMtdeX91Z0JwpY6Jq0X90aZvwW10MeSiLZ7jEcIAmw2nhMYa2"
);

$url = 'https://api.twitter.com/1.1/search/tweets.json';
$requestMethod = 'POST';
$postfields = array(
    'screen_name' => 'usernameToBlock', 
    'skip_status' => '1'
);
/*$getfield = '?q=%40twitterapi';*/
$twitter = new TwitterAPIExchange($settings);
echo $twitter->buildOauth($url, $requestMethod)
    ->setPostfields($postfields)
    ->performRequest();/*

$twitter = new TwitterAPIExchange($settings);
$response = $twitter->setGetfield($getfield)
    ->buildOauth($url, $requestMethod)
    ->performRequest();

var_dump(json_decode($response));*/
?>

 /*
$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
 
$requestMethod = "GET";
 
$getfield = '?screen_name=iagdotme&count=20';
 
$twitter = new TwitterAPIExchange($settings);
echo $twitter/*->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();*/
?>
