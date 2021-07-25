<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preload" href="fonts/MaterialIconsRound-Regular.woff2" as="font">
    <link rel="stylesheet" href="css/core/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <style>
        .topo__icone { width:64px; height:64px; font-size:64px; margin-right:8px; margin-left:0; }

        .topo__link { display:block; margin-top:16px; color:var(--cor-branco-1); transition:opacity 0.2s }
        .topo__link:hover { opacity:0.7; }
    </style>
</head>
<body>
    <section class="envelope envelope--p">
        <header class="box" style="padding:32px 24px; text-align:center;">
            <i class="topo__icone mi">warning</i>    
            <h1 class="texto-titulo texto-titulo--h1">Você não tem permissão para acessar essa página!</h1>
            <a href="index.php" class="topo__link">Voltar à página inicial</a>
        </header>
    </section>
</body>
</html>

<?php
session_start();
session_destroy();
?>