<?php
$host="localhost";
$user="root";
$pwd="";
$db="traveluniversedb";
$conp=mysqli_connect($host,$user,$pwd,$db);
 if(mysqli_connect_error()){
    die('Database connection failed'.mysqli_connect_errno());
 }

?>
