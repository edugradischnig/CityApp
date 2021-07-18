<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="finalizarSessao.php">Sair</a>
</body>
</html>


<?php
/* Nessa página serão exibidos todos os conteudos ao usuário */
session_start();
echo '<h1>Seja bem vindo, '.$_SESSION['email'].'</h1>';
?>