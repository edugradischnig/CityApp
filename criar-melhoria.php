<?php
session_start();
if($_SESSION['tipo'] == 'p'){
    header("location: sem-permissao.php");
}if(!isset($_SESSION['email'])){
    header("location: sem-permissao.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="$_POST" action="processar-acoes-cidadao.php">
        <label for="cabecalho_melhoria">Resumo da melhoria:</label>
        <input type="text" name="cabecalho_melhoria"> <br>

        <label for="detalhe_melhoria">Detalhe o que você deseja melhorar e como será feito:</label>
        <input type="text" name="detalhe_melhoria"> <br>

        <input type="submit" value="Propor melhoria">
    </form>
</body>
</html>