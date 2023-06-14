<?php

$string = file_get_contents('dischi.json');
$disc_list = json_decode($string, true);
$result = [];



if(!isset($_GET['discIndex'])){
    $result = $disc_list;
}else{
    $result = $disc_list[$_GET['discIndex']];
}



header('Content-Type: application/json');
echo json_encode($result);