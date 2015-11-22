<!DOCTYPE html>
<html>
  <head>
    
    <INPUT TYPE = "Text" VALUE ="text" NAME = "hashtag">
    <INPUT TYPE = "Text" VALUE ="text" NAME = "number">

    
    
    <?php
    $hashtagparam = $_GET['hashtag'];
    $numberparam = $_GET['number'];
    
    echo "https://93b18000-37fe-479a-ac00-1a163f963bf7:lVZJbq2xyT@cdeservice.mybluemix.net/api/v1/messages/search?q=%23".$hashtagparam."&size=".$numberparam;

    ?>
    
    <meta charset="utf-8">
    <title>Heatmaps</title>
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
#floating-panel {
  position: absolute;
  top: 10px;
  left: 25%;
  z-index: 5;
  background-color: #fff;
  padding: 5px;
  border: 1px solid #999;
  text-align: center;
  font-family: 'Roboto','sans-serif';
  line-height: 30px;
  padding-left: 10px;
}

      #floating-panel {
        background-color: #fff;
        border: 1px solid #999;
        left: 25%;
        padding: 5px;
        position: absolute;
        top: 10px;
        z-index: 5;
      }
    </style>
  </head>

</html>
<?php

$data = json_decode(file_get_contents('https://93b18000-37fe-479a-ac00-1a163f963bf7:lVZJbq2xyT@cdeservice.mybluemix.net/api/v1/messages/search?q=%23'.$hashtagparam.'&size='.$numberparam));


$latArr = array();
$lngArr = array();

$counter = 0;
foreach ($data->tweets as $value){
  $city = $value->cde->author->location->city;
  $state = $value->cde->author->location->state;
  $country = $value->cde->author->location->country;

    if(!empty($state) || !empty($city)){

      
      

      $geocodedData = json_decode(file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.$city.','.'$state.&key=AIzaSyAg2T1zc4lXqSYzOIv2AgYMzKu0w80wmTI'));
      $lat = $geocodedData->results[0]->geometry->location->lat;
      $lng = $geocodedData->results[0]->geometry->location->lng;
      $latArr[$counter] = $lat;
      $lngArr[$counter] = $lng;
      $counter++;
    }
 

}

/*foreach($latArr as $val){
  echo $val."<br>";
}

foreach($lngArr as $val){
  echo $val."<br>";
}*/

//echo json_encode($latArr);
//echo json_encode($lngArr);



?>
<html>

  <body>

    <div id="map"></div>
    
    

    <script>

var map, heatmap;

function toggleHeatmap() {
  heatmap.setMap(heatmap.getMap() ? null : map);
}

function changeGradient() {
  var gradient = [
    'rgba(0, 255, 255, 0)',
    'rgba(0, 255, 255, 1)',
    'rgba(0, 191, 255, 1)',
    'rgba(0, 127, 255, 1)',
    'rgba(0, 63, 255, 1)',
    'rgba(0, 0, 255, 1)',
    'rgba(0, 0, 223, 1)',
    'rgba(0, 0, 191, 1)',
    'rgba(0, 0, 159, 1)',
    'rgba(0, 0, 127, 1)',
    'rgba(63, 0, 91, 1)',
    'rgba(127, 0, 63, 1)',
    'rgba(191, 0, 31, 1)',
    'rgba(255, 0, 0, 1)'
  ]
  heatmap.set('gradient', heatmap.get('gradient') ? null : gradient);
}

function changeRadius() {
  heatmap.set('radius', heatmap.get('radius') ? null : 20);
}

function changeOpacity() {
  heatmap.set('opacity', heatmap.get('opacity') ? null : 0.2);
}


function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    zoom: 2,
    center: {lat: 0, lng: 0},
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });

  heatmap = new google.maps.visualization.HeatmapLayer({
    data: getPoints(),
    map: map
  });
}



// Heatmap data: 500 Points
function getPoints() {
  var returnArr;

  return [ <?php for($i=0;$i<count($lngArr)-1;$i++)
  {
    echo "new google.maps.LatLng(".$latArr[$i].",".$lngArr[$i]."),";
  }
   echo "new google.maps.LatLng(".$latArr[count($latArr)-1].",".$lngArr[count($lngArr)-1].")";
   ?>];
}

    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBg4wiREvS7Yi7diuyNdMf3FnlXP0PCC-8&signed_in=true&libraries=visualization&callback=initMap">
    </script>
  </body>
</html>
