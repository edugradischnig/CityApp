<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preload" href="fonts/MaterialIconsRound-Regular.woff2" as="font">
    <link rel="preload" href="fonts/Montserrat-Regular.woff2" as="font">
    <link rel="stylesheet" href="css/core/main.css">
</head>
<body>
    <style>
        .topo__icone { 
            width:32px; height:32px; margin-left:8px; 
            font-size:32px; flex-shrink:0;
            color:var(--cor-principal-4); 
        }

        .topo__subtitulo {
            color:var(--cor-branco-1); font-weight:bold;
        }

        .form { align-items:flex-start; flex-direction:column; }

        .form + .form { margin-top:8px; }

        .form-container { width:100%; display:block; }
        .form-container + .form-container { margin-top:16px; }

        .form-label { margin-bottom:8px; color:var(--cor-branco-1); font-size:12px; line-height:1;}
    
        .form-input { 
            width:100%; height:40px; padding:9px 15px;
            border:1px solid rgba(0, 0, 0, 0.12); color:var(--color-preto-2); 
            font-size:14px; line-height:20px; 
        }
    </style>
    <section class="envelope envelope--p">
        <header class="display-flex">    
            <h1 class="texto-titulo texto-titulo--h1">CityApp</h1>
            <i class="topo__icone mi">coronavirus</i>
        </header>
        <h2 class="topo__subtitulo texto-titulo texto-titulo--h4" style="margin-top:16px;">Entre e faça parte dos mais de 50 milhões de usuários</h2>
        <div class="box" style="padding:32px 24px; margin-top:16px;">
            <form action="autenticar.php" method="POST">
                <div class="form-container">
                    <div class="form-label">E-mail:</div>
                    <input type="email" name="email" placeholder="Ex.: xiniga@gmail.com" class="form-input" required>
                </div>

                <div class="form-container">
                    <div class="form-label">Senha:</div>
                    <input type="password" name="senha" placeholder="Digite a sua senha" class="form-input" required>
                </div>

                <div class="display-flex" style="margin-top:16px;">
                    <input type="submit" value="Entre" class="botao mi--a" style="background-color:var(--cor-principal-3);">
                    <span class="texto-corpo" style="margin:0 8px;">ou</span>
                    <a href="cadastrar.html" class="botao mi--a" style="background-color:var(--cor-principal-5);">Cadastre-se</a>
                </div>
            </form>
        </div>
    </section>
</body>
</html>

<!-- Verificar nessa página se já existe uma sessão ativa-->

<?php

?>