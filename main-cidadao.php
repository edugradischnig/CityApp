<?php
session_start();
if($_SESSION['tipo'] == 'p'){
    header("location: sem-permissao.php");
}if(!isset($_SESSION['email'])){
    header("location: sem-permissao.php");
}
?>

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
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    <style>
        .topo { width:100%; position:fixed; z-index:1; background-color:#383a59; }

        .topo__conteudo { height:60px; padding:16px; position:relative; display:flex; align-items:center; justify-content:space-between; }

        .topo__botao { background-color:var(--cor-principal-3); }

        .topo__item {
            display:none; width:192px; padding:8px;
            position:absolute; top:52px; right:0; 
            color:var(--cor-branco-1); text-align:center; 
            background-color:var(--cor-principal-2); 
        }

        .topo__link, #info-usuario-logado { color:var(--cor-branco-1); transition:opacity 0.2s }
        .topo__link:hover { opacity:0.7; }

        .topo__usuario { width:100%; position:absolute; top:60px; left:0; background-color:#6272a4; }

        .ativo { display:block; }

        .box + .box { margin-top:16px; }

        .display-none {display:none; }

        .votacao { padding:8px; }

        #sair{text-decoration: none; color: #FF6A6A}
        #sair:hover{color: red}

    </style>
</head>

<body>
    <header class="topo">
        <nav class="topo__conteudo envelope envelope--m">
            <div class="topo__logo display-flex">
                <a href="index.php"><h1 class="texto-titulo texto-titulo--h1">CityApp</h1></a>
                <i class="topo__icone mi">maps_home_work</i>
            </div>
            <button class="topo__botao botao-cadastro mi--b" data-icone="add">Publicação</button>
            <nav class="topo__item">
                <ul style="margin:-8px">
                    <li style="padding:8px;">
                        <a href="criar-problema.php" class="topo__link">Relatar um problema</a>
                    </li>
                    <li style="padding:8px;">
                        <a href="criar-melhoria.php" class="topo__link">Solicitar melhorias</a>
                    </li>
                </ul>
            </nav>
        </nav>
    </header>
    
    <div class="topo__usuario">
        <div class="envelope envelope--m display-flex" style="padding:16px 18px; justify-content:space-between" id="info-usuario-logado">
            <p>Seja bem vindo, <?=$_SESSION['email']?>.</p>
            <a id=sair href="finalizarSessao.php">Sair</a>
        </div>
    </div>
    
    <section class="envelope envelope--p">
        <div style="padding-top:60px;">
                <!--<h1 class="texto-titulo texto-titulo--h1" style="color:var(--cor-principal-5)">Problema</h1>
                <p class="texto-corpo" style="margin-top:8px; color:var(--cor-branco-2);">Prefeitura, estou com um problema e preciso de ajuda, estou com um problema e preciso de ajuda.</p>
                <h2 class="texto-titulo texto-titulo--h2" style="margin-top:16px; color:var(--cor-principal-3);">Localização</h2>
                <div class="objeto-recipiente" style="border:2px solid #fff; margin-top:8px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1737.0204224362915!2d-51.300760699393486!3d-29.456817609738284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjnCsDI3JzI0LjYiUyA1McKwMTgnMDAuNCJX!5e0!3m2!1spt-BR!2sbr!4v1627154107322!5m2!1spt-BR!2sbr" class="objeto-conteudo" loading="lazy"></iframe>
                </div>
                <p class="texto-corpo" style="margin-top:8px; color:var(--cor-branco-2);">Este problema ainda nao foi resolvido pela prefeitura.</p> !-->
            <!--<div class="box" style="padding:32px 24px; margin-top:16px;">
                <h1 class="texto-titulo texto-titulo--h1" style="color:var(--cor-principal-5)">Problema</h1>
                <p class="texto-corpo" style="margin-top:8px; color:var(--cor-branco-2);">Prefeitura, estou com um problema e preciso de ajuda, estou com um problema e preciso de ajuda.</p>
                <h2 class="texto-titulo texto-titulo--h2" style="margin-top:16px; color:var(--cor-principal-3);">Este problema ja foi resolvido pela prefeitura.</h2>
            </div>

            <div class="box" style="padding:32px 24px; margin-top:16px;">
                <h1 class="texto-titulo texto-titulo--h1" style="color:var(--cor-principal-5)">Votação</h1>
                <p class="texto-corpo" style="margin-top:8px; color:var(--cor-branco-2);">A cidade de Feliz tem varios probleminhas nos ajude e vote no problema que deve ser resolvido com maior urgencia.</p>
                <div style="margin-top:8px;"> !-->
                    
            <?php
            include "conexao.php";
            
            $query = "SELECT * FROM acao";
            $resultado = mysqli_query($connection, $query);

            for ($i=0; $i < mysqli_num_rows($resultado); $i++) {
                $linha = mysqli_fetch_assoc($resultado);
            ?>
            <div class="box" style="padding:32px 24px; margin-top:16px;"> 
                <h1 class='texto-titulo texto-titulo--h1' style='color:var(--cor-principal-5)'><?=$linha['resumo']?></h1>
                <p class='texto-corpo' style='margin-top:8px; color:var(--cor-branco-2);'><?=$linha['descricao']?></p>
                <p class='texto-legenda' style='margin-top:8px; color:var(--cor-branco-1);'>Criado por <?=$linha['email_autor']?></p>
                <?php 
                if($linha['resolvido'] == 1){ ?>
                    <p class="texto-titulo texto-titulo--h2" style="margin-top:16px; color:var(--cor-principal-3);">O problema foi resolvido pela prefeitura!</p>
                <?php }else{ ?>
                    <h2 class='texto-titulo texto-titulo--h2' style='margin-top:16px; color:var(--cor-principal-3);'>Localização</h2>;
                    <div class='objeto-recipiente' style='border:2px solid #fff; margin-top:8px;'>
                        <iframe src="https://maps.google.com/maps?q=<?=$linha['y_coord'].",".$linha['x_coord']."&z=15&output=embed"?>" class="objeto-conteudo"></iframe>";
                    </div>
                    <p class='texto-corpo' style='margin-top:8px; color:var(--cor-branco-2);'>Este problema ainda não foi resolvido pela prefeitura.</p>
                <?php } ?>
            </div>
            <?php } ?>
                
        </div>
    </section>

    <script src="js/core/jquery-3.5.1.min.js"></script>

    <script>
        $(function(){
            $(".topo__botao").on("click", function() {
                if(!$(".topo__item").hasClass("ativo")){
                    $(".topo__item").addClass("ativo");
                }else{
                    $(".topo__item").removeClass("ativo");
                }
                
            });
        });
    </script>
</body>