<?php 


$file = file_get_contents("users.json");

$new = json_decode($file,true);

print_r($new);