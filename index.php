<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>CityApp</h1>
    <h1>Entre e faça parte dos mais de 50 milhões de usuários</h1>
    <form action="autenticar.php" method="POST">
        <label for="email">E-mail:</label>
        <input type="email" name="email" required>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required>

        <input type="submit" value="Entrar">
    </form>


    <a href="cadastrar.html">Cadastre-se</a>
</body>
</html>


<?php
session_start();

if(isset($_SESSION['email'])){
    header("location: main.php");
}
?>