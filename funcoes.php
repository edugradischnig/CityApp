<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
if($_SESSION['tipo'] == "cidadao"){
    echo "<a>Relatar problema</a> <br>";
    echo "<a>Solicitar uma melhoria ou alteração</a> <br>";
    echo "<a>Nao sei</a> <br>";
}else if($_SESSION['tipo'] == "prefeitura"){
    echo "<a>Ver os problemas da minha cidade</a> <br>";
    echo "<a>Criar uma enquete para meus cidadãos</a> <br>";
    echo "<a>Criar um anúncio oficial para meus cidadãos</a> <br>";
}
?>