<?php
$data = json_decode(file_get_contents('https://e8108483-560b-47ad-8a92-a4b67e43a2fa:SN4DCNwzwT@cdeservice.mybluemix.net/api/v1/messages/search?q=%23asd&size=10'));


//for each tweet, get data
foreach ($data->tweets as $value){
  $city = $value->cde->author->location->city;
  $state = $value->cde->author->location->state;
  $country = $value->cde->author->location->country;
 // if(country == 'United States'){
    if(!empty($state) || !empty($city)){
      //echo "city".$city;
      //echo " ";
      //echo "state".$state;
      //echo " <br>";
      
      
      //geocode
      $geocodedData = json_decode(file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.$city.','.'$state.&key=AIzaSyAg2T1zc4lXqSYzOIv2AgYMzKu0w80wmTI'));
      $lat = $geocodedData->results[0]->geometry->location->lat;
      $lng = $geocodedData->results[0]->geometry->location->lng;
      //echo $lat." ".$lng."<br>";
    }
 
}
//----
?>
<script type="text/javascript"
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAg2T1zc4lXqSYzOIv2AgYMzKu0w80wmTI&libraries=visualization&sensor=true">
  window.alert("initialized");
</script>
<?php

?>
