<?php
$host = "db";
$user = "root";
$pass = "test";
$db = "Class_room";

try{
    $mysqli = new mysqli($host,$user,$pass,$db);
    $mysqli->query("SET NAMES utf8");
}
catch(Exception $e){
    echo $e->getMessage();
    //echo "Error !!!";
}