<?php 

$data = file_get_contents("data.txt");
$arr = explode("</br>",$data);
echo "<pre>";
print_r($arr);
echo "</pre>";