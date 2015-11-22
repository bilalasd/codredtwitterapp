<?php
$data = json_decode(file_get_contents('https://cdeservice.mybluemix.net:443/api/v1/messages/search?q=asd&size=5'));

echo $data;
?>
