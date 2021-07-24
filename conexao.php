<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dataBaseName = "cityapp";

$connection = mysqli_connect($serverName, $userName, $password, $dataBaseName);

if(!$connection){
    die("Connection failed: ". mysqli_connect_error());
}
?>