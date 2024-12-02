<?php

include_once("db.php");
include_once("pessoa_da.php");

if (isset($_POST["nome"]) && isset($_POST["email"])) {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    save($nome, $email);
    echo "Usuario $nome inserido com sucesso";

} else
    echo "Erro ao inserir usuário informe os parametros corretamente";

?>