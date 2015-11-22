<?php
$json = file_get_contents("https://cdeservice.mybluemix.net/api/v1/messages/search?q=%23asd&size=10");
$obj = json_decode($json);
echo $obj;
?>
