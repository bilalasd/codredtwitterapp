<?php
$data = json_decode(file_get_contents('https://e8108483-560b-47ad-8a92-a4b67e43a2fa:SN4DCNwzwT@cdeservice.mybluemix.net/api/v1/messages/search?q=%23asd&size=10'));


//for each tweet, get data
foreach ($data->tweets as $value){
  $city = $value->cde->author->location->city;
  $state = $value->cde->author->location->state;
  echo "city".$city;
  echo " ";
  echo "state".$state;
  echo "<br>";
}
//----

//echo $data->tweets[0]->cde->author->gender;
?>
