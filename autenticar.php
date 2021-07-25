<?php
include "conexao.php";
session_start();

//CIDADAO:
$query = "SELECT email, senha_hash FROM usuariocomum";
$usuariosComuns = mysqli_query($connection, $query);

for ($i=0; $i < mysqli_num_rows($usuariosComuns); $i++) { 
    $linha = mysqli_fetch_assoc($usuariosComuns);
    if(strval($_POST['email']) == $linha['email'] && (password_verify(strval($_POST['senha']), $linha['senha_hash']))){
        $_SESSION['email'] = strval($_POST['email']);
        $_SESSION['tipo'] = 'c';
        header("location: main-cidadao.php");
    }
}

//PREFEITURA:
$query = "SELECT email, senha_hash FROM usuarioprefeitura";
$usuariosPrefeitura = mysqli_query($connection, $query);

for ($i=0; $i < mysqli_num_rows($usuariosPrefeitura); $i++) { 
    $linha = mysqli_fetch_assoc($usuariosPrefeitura);
    if(strval($_POST['email']) == $linha['email'] && (password_verify(strval($_POST['senha']), $linha['senha_hash']))){
        $_SESSION['email'] = strval($_POST['email']);
        $_SESSION['tipo'] = 'p';
        header("location: main-prefeitura.php");
    }
}

header("location: index.php");
?>