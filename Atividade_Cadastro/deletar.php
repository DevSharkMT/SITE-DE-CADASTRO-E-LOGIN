<?php

    require_once "conexao.php";

    $id_login = $_GET["id_login"];

    $query = "DELETE FROM clientes WHERE id_login = '$id_login'";
    if (mysqli_query($conn, $query)) {
        echo "CLIENTE EXCLUÍDO COM SUCESSO!";
        header("refresh:2;url=listar.php");
    } else {
        echo "ERRO AO EXCLUIR O CLIENTE!";
        header("refresh:2;url=index.html");
    }
?>