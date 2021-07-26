<?php

if(isset($_POST["id"])){
    $id = $_POST["id"];
    include_once "conexao.php";

    $query = "UPDATE acao SET resolvido=1 WHERE id=$id";
    mysqli_query($connection, $query);
}

?>