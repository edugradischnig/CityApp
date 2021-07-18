<?php
session_start();

if ($_POST['email'] == "teste@gmail.com" && $_POST['senha'] == "123"){
    $_SESSION['email'] = "teste@gmail.com";
    header("location: index.php");
}else{
    header("location: index.php");
}
?>