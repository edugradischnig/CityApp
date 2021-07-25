<?php
include "conexao.php";
session_start();

$query = "INSERT INTO acao (tipo, resumo, descricao, resolvido, email_autor,cidade, x_coord, y_coord) VALUES ('p', '".$_POST['cabecalho']."', '".$_POST['detalhe']."', false, '".$_SESSION['email']."','Feliz','".$_COOKIE['x']."','".$_COOKIE['y']."')";

mysqli_query($connection, $query);

header("location: main-cidadao.php");
?>