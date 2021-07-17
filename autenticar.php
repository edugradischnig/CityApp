<?php
if ($_POST['email'] == "teste@gmail.com" && $_POST['senha'] == "123"){
    echo "Sessao iniciada";
}else{
    echo "Usuário e/ou senha incorretas";
}
?>