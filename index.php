<?php
require_once('TwitterAPIExchange.php');
 
/** Set access tokens here - see: https://dev.twitter.com/apps/ */
$settings = array(
    'oauth_access_token' => "22417002-fxVc9DCfVqqDuI3tP5xfNM4UD1gMiWPDRVvSqynkp",
    'oauth_access_token_secret' => "oSWVJGrWrARY9LsnlUQMTkZk5GpADYpKrYOy3fg7voP8G",
    'consumer_key' => "cLBOUhBAhNBofJPhRGVuWOBWf",
    'consumer_secret' => "CUMtdeX91Z0JwpY6Jq0X90aZvwW10MeSiLZ7jEcIAmw2nhMYa2"
);
 
$url = 'https://api.twitter.com/1.1/blocks/create.json';

$postfields = array(
    'screen_name' => 'usernameToBlock', 
    'skip_status' => '1'
);
/** Perform the request and echo the response **/
$twitter = new TwitterAPIExchange($settings);
echo $twitter->buildOauth($url, $requestMethod)
             ->setPostfields($postfields)
             ->performRequest();
             
 /*
 
$requestMethod = 'POST';
 
$getfield = '?q=%23freebandnames&since_id=24012619984051000&max_id=250126199840518145&result_type=mixed&count=4';
 
$twitter = new TwitterAPIExchange($settings);
echo $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();*/

?>
