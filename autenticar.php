<?php
session_start();

if ($_POST['email'] == "teste@gmail.com" && $_POST['senha'] == "123"){ //Adicionar na session se é Cidadão ou Prefeitura
    $_SESSION['email'] = "teste@gmail.com";
    header("location: index.php");
}else{
    header("location: index.php");
}
?>