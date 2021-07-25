<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Você não tem permissão para acessar essa página!</h1>
    <a href="index.php">Voltar à página inicial</a>
</body>
</html>

<?php
session_start();
session_destroy();
?>