<?php
require_once '/TwitterOAuth.php';
 
define('CONSUMER_KEY', 'cLBOUhBAhNBofJPhRGVuWOBWf');
define('CONSUMER_SECRET', 'CUMtdeX91Z0JwpY6Jq0X90aZvwW10MeSiLZ7jEcIAmw2nhMYa2');
define('ACCESS_TOKEN', '22417002-sjVPWcCXuobP5fvb4NIQSv3KiKUakWHgFoHBuAsoZ');
define('ACCESS_TOKEN_SECRET', 'DUmRu3JYS8uygtRUKxcLhCVkbCY96g7cZSh2WQVut6rxg');
 
$toa = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);
 
$query = array(
  "q" => "#WorldSeries"
);
 
$results = $toa->get('search/tweets', $query);
 
foreach ($results->statuses as $result) {
  echo $result->user->screen_name . ": " . $result->text . "\n";
}

?>
