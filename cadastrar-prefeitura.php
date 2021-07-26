<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preload" href="fonts/MaterialIconsRound-Regular.woff2" as="font">
    <link rel="stylesheet" href="css/core/main.css">
</head>
<body>
    <section class="envelope envelope--p">
        <div class="topo__logo display-flex">
                <a href="index.php"><h1 class="texto-titulo texto-titulo--h1">CityApp</h1></a>
                <i class="topo__icone mi">maps_home_work</i>
        </div>
        <header class="display-flex">    
            <h1 class="texto-titulo texto-titulo--h1">Cadastro de representante</h1>
            <i class="topo__icone mi">work</i>
        </header>
        <h2 class="topo__subtitulo texto-titulo texto-titulo--h4" style="margin-top:16px;">Insira os dados da sua prefeitura para realizar o cadastro.</h2>
        <div class="box" style="padding:32px 24px; margin-top:16px;">
            <form action="processa.php" method="POST">
                <div class="form-container">
                    <div class="form-label">Código de autorização da prefeitura:</div>
                    <input type="text" name="codigo" \
                    pattern="\d{6}" \ title="Formato de código inválido! Contate o suporte do CityApp" class="form-input">
                </div>
                <div class="form-container">
                    <div class="form-label">Cidade:</div>
                    <input type="text" name="cidade" placeholder="Ex.: Feliz" class="form-input">
                </div>
                <div class="form-container">
                    <div class="form-label">Estado:</div>
                    <input type="text" name="estado" placeholder="Ex.: Rio Grande do Sul" class="form-input">
                </div>
                <div class="form-container">
                    <div class="form-label">Email:</div>
                    <input type="email" name="email" placeholder="Ex.: joaoloriston@gmail.com" class="form-input">
                </div>
                <div class="form-container">
                    <div class="form-label">Senha:</div>
                    <input type="password" name="senha" placeholder="Digite uma senha" class="form-input">
                </div>
                <input type="submit" value="Cadastre-se" class="botao mi--a" style="margin-top:16px; background-color:var(--cor-principal-3);">
            </form>
        </div>
    </section>
</body>
</html>