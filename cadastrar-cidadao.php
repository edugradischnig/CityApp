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
<body> <!-- VERIFICAR ENTRADAS COM JS ANTES DE SALVAR NO BANCO-->
    <section class="envelope envelope--p">
        <div class="topo__logo display-flex">
                <a href="index.php"><h1 class="texto-titulo texto-titulo--h1">CityApp</h1></a>
                <i class="topo__icone mi">maps_home_work</i>
        </div>
        <header class="display-flex">    
            <h1 class="texto-titulo texto-titulo--h1">Cadastro de cidadão</h1>
            <i class="topo__icone mi">home</i>
        </header>
        <h2 class="topo__subtitulo texto-titulo texto-titulo--h4" style="margin-top:16px;">Insira seus dados pessoais para realizar o seu cadastro.</h2>
        <div class="box" style="padding:32px 24px; margin-top:16px;">
        <form action="processa.php" method="POST">
            <div class="form-container">
                <div class="form-label">Nome:</div>
                <input type="text" name="nome" placeholder="Ex.: João" class="form-input" required>
            </div>
            <div class="form-container">
                <div class="form-label">Sobrenome:</div>
                <input type="text" name="sobrenome" placeholder="Ex.: Loriston" class="form-input" required>
            </div>
            <div class="form-container">
                <div class="form-label">CPF:</div>
                <input type="text" name="cpf" \
                pattern="\d{3}\d{3}\d{3}\d{2}" \ placeholder="Ex.: 999.999.999-99" class="form-input" required> <br>
            </div>
            <div class="form-container">
                <div class="form-label">Email:</div>
                <input type="email" name="email" placeholder="Ex.: joaoloriston@gmail.com" class="form-input" required>
            </div>
            <div class="form-container">
                <div class="form-label">Senha:</div>
                <input type="password" name="senha" placeholder="Digite uma senha" class="form-input" required>
            </div>
            <input type="submit" value="Cadastra-se" class="botao mi--a" style="margin-top:16px; background-color:var(--cor-principal-3);">
        </form>
    </section>
</body>
</html>