<?php
$data = json_decode(file_get_contents('https://cdeservice.mybluemix.net/api/v1/messages/search?q=%23asd&size=10'));

echo $data;
?>
