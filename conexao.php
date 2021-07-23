<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cityapp";

// Cria conexão
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Verifica a conexão
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}