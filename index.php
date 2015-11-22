<!DOCTYPE html>
<html>
<head>
<style type = "text/css">
  html, body {height: 100%; margin: 0; padding: 0;}
  #map {height: 100%; }
  </style>
  </head>
  <body>
    <div id="map"></div>
    <script type="text/javascript">
    var map;
    function initMap(){
      map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: -34.397, lng: 150.644},
        zoom: 8
        }};
        }
        </script>
        <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBKmD1B6cH7FzUYeCS0i3G9CMTJ0Rtbd8&callback=initMap">
    </script>
    </body>
    </html>
/*<?php
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
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBKmD1B6cH7FzUYeCS0i3G9CMTJ0Rtbd8&libraries=visualization&sensor=true">
  var heatmapData = [
  new google.maps.LatLng(37.782, -122.447),
  new google.maps.LatLng(37.782, -122.445),
  new google.maps.LatLng(37.782, -122.443),
  new google.maps.LatLng(37.782, -122.441),
  new google.maps.LatLng(37.782, -122.439),
  new google.maps.LatLng(37.782, -122.437),
  new google.maps.LatLng(37.782, -122.435),
  new google.maps.LatLng(37.785, -122.447),
  new google.maps.LatLng(37.785, -122.445),
  new google.maps.LatLng(37.785, -122.443),
  new google.maps.LatLng(37.785, -122.441),
  new google.maps.LatLng(37.785, -122.439),
  new google.maps.LatLng(37.785, -122.437),
  new google.maps.LatLng(37.785, -122.435)
];
var sanFrancisco = new google.maps.LatLng(37.774546, -122.433523);

map = new google.maps.Map(document.getElementById('map'), {
  center: sanFrancisco,
  zoom: 13,
  mapTypeId: google.maps.MapTypeId.SATELLITE
});

var heatmap = new google.maps.visualization.HeatmapLayer({
  data: heatmapData
});
heatmap.setMap(map);
</script>
<?php

?>
*/
