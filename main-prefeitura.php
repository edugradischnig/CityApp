<?php
include "conexao.php";
session_start();
if($_SESSION['tipo'] == 'c'){
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

        .votacao { padding:8px; }

        #sair{text-decoration: none; color: #FF6A6A}
        #sair:hover{color: red}

        .display-none {display:none; }

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
                        <a href="" class="topo__link">Criar votação</a>
                    </li>
                    <li style="padding:8px;">
                        <a href="" class="topo__link">Divulgação</a>
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

            <?php
            
            $query = "SELECT * FROM acao";
            $resultado = mysqli_query($connection, $query);

            for ($i=0; $i < mysqli_num_rows($resultado); $i++) {
                $linha = mysqli_fetch_assoc($resultado);
            
            ?>

            <div class="box" style="padding:32px 24px; margin-top:16px;">
                <h1 class="texto-titulo texto-titulo--h1" style="color:var(--cor-principal-5)"><?=$linha['resumo']?></h1>
                <p class="texto-corpo" style="margin-top:8px; color:var(--cor-branco-2);"><?=$linha['descricao']?></p>
                <?php
                if($linha['resolvido'] == 1){ ?>
                    <p class="texto-titulo texto-titulo--h2" style="margin-top:16px; color:var(--cor-principal-3);">Problema resolvido!</p>
                <?php }else{ ?>
                    <h2 class="<?="mapa-".$linha['id']?> texto-titulo texto-titulo--h2" style="margin-top:16px; color:var(--cor-principal-3);">Localização</h2>
                    <div class="<?="mapa-".$linha['id']?> objeto-recipiente" style="border:2px solid #fff; margin-top:8px;">
                        <iframe src="https://maps.google.com/maps?q=<?=$linha['y_coord'].",".$linha['x_coord']."&z=15&output=embed"?>" class="objeto-conteudo"></iframe>
                    </div>
                    <button id=<?=$linha['id']?> class='resolver botao mi--a' style='margin-top:16px; background-color:var(--cor-principal-3);' data-icone='check'>Resolver</button>
                    <p class="temp texto-titulo texto-titulo--h2 display-none" style="margin-top:16px; color:var(--cor-principal-3);">Problema resolvido!</p>
                    <?php }?>      
            </div>
            <?php } ?>

            <div class="box" style="padding:32px 24px; margin-top:16px;">
                <h1 class="texto-titulo texto-titulo--h1" style="color:var(--cor-principal-5)">Votação</h1>
                <p class="texto-corpo" style="margin-top:8px; color:var(--cor-branco-2);">A cidade de Feliz tem varios probleminhas nos ajude e vote no problema que deve ser resolvido com maior urgencia.</p>
                <div style="margin-top:8px;">
                    <div class="display-flex" style="flex-wrap:wrap; margin:-8px">
                        <div class="votacao display-flex">
                            <span style="margin-left:8px; color:var(--cor-branco-1)">10 -</span>
                            <span style="margin-left:8px; color:var(--cor-branco-1)">Arrumar o asfalto</span>
                        </div>
                        <div class="votacao display-flex">
                            <span style="margin-left:8px; color:var(--cor-branco-1)">6 -</span>
                            <span style="margin-left:8px; color:var(--cor-branco-1)">Arrumar o asfalto</span>
                        </div>
                    </div>
                    <button class="botao mi--a" style="margin-top:16px; background-color:var(--cor-principal-3);" data-icone="close">Encerrar</button>
                </div>
            </div>
        </div>
    </section>

    <script src="js/core/jquery-3.5.1.min.js"></script>

    <script>
        $(".resolver").on("click", function() {
            var id = $(this).attr("id");
            $this = $(this);
            $mapa = $(".mapa-" + id);
            $.post("ajax.php", {
                id: id 
            }, function(data, status){
                $this.addClass("display-none");
                $mapa.addClass("display-none");
                $(".temp").removeClass("display-none");
            }  )
        });
    </script>

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