<?php
require_once('TwitterAPIExchange.php');
 
/** Set access tokens here - see: https://dev.twitter.com/apps/ */
$settings = array(
    'oauth_access_token' => "cLBOUhBAhNBofJPhRGVuWOBWf",
    'oauth_access_token_secret' => "CUMtdeX91Z0JwpY6Jq0X90aZvwW10MeSiLZ7jEcIAmw2nhMYa2",
    'consumer_key' => "22417002-sjVPWcCXuobP5fvb4NIQSv3KiKUakWHgFoHBuAsoZ",
    'consumer_secret' => "DUmRu3JYS8uygtRUKxcLhCVkbCY96g7cZSh2WQVut6rxg"
);
 
$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
 
$requestMethod = "GET";
 
$getfield = '?screen_name=iagdotme&count=20';
 
$twitter = new TwitterAPIExchange($settings);
echo $twitter/*->setGetfield($getfield)*/
             ->buildOauth($url, $requestMethod)
             ->performRequest();
?>
