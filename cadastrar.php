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

<style>
    .botao-cadastro { 
        height:36px; padding:6px 12px; display:inline-flex; align-items:center;
	    color:var(--cor-preto-1); font-size:14px; line-height:24px; text-transform:uppercase;
	    border-radius:4px; opacity:1;
	    transition:opacity 0.2s; 
    }

    .botao-cadastro::before {
	width:20px; height:20px; font-size:20px; margin:0 8px 0 -4px; flex-shrink:0;
	color:var(--cor-preto-1); content:attr(data-icone); transition:color 0.2s;
    }

    .botao-cadastro:focus,
    .botao-cadastro:hover { opacity:0.7; }
    .botao-cadastro:focus::after,
    .botao-cadastro:hover::after { color:var(--cor-preto-2); }
</style>
<body>
    <section class="envelope envelope--p">
        <header class="display-flex">    
            <h1 class="texto-titulo texto-titulo--h1">Como você deseja se cadastrar?</h1>
        </header>
        <h2 class="topo__subtitulo texto-titulo texto-titulo--h4" style="margin-top:16px;">Para participar do CityApp você precisa informar se é morador de uma cidade ou representante da sua prefeitura.</h2>
        <div class="display-flex" style="margin-top:16px;">
            <a href="cadastrar-cidadao.php" class="botao-cadastro mi--b" style="margin-right:32px; background-color:var(--cor-principal-3);" data-icone="home">Sou cidadão</a>
            <a href="cadastrar-prefeitura.php" class="botao-cadastro mi--b" style="background-color:var(--cor-principal-5);" data-icone="work">Sou representante da prefeitura</a>
        </div>
    </section>
</body>
</html>