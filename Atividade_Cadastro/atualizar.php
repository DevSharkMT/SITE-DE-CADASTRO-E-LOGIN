<?php
    require_once "conexao.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id_login = $_POST["id_login"];
        $nome = $_POST["nome"];
        $nascimento = $_POST["nascimento"];
        $idade = $_POST["idade"];
        $cpf = $_POST["cpf"];
        $e_mail = $_POST["e_mail"];
        $telefone = $_POST["telefone"];

        if($nome != "" && $nascimento != "" && $idade!= "" && $cpf != "" && $e_mail != "" && $telefone != "" ){
            $sql = "UPDATE clientes SET nome = '$nome', nascimento = '$nascimento', idade = '$idade', cpf = '$cpf', e_mail = '$e_mail', telefone = '$telefone' WHERE id_login = '$id_login'";
            echo "$id_login";
            
            if ($conn->query($sql) === TRUE) {
                echo "CLIENTE ATUALIZADO COM SUCESSO!";
                header("refresh:2;url=menu.html");
            } else {
                echo "TODOS OS CAMPOS DEVEM SER PREENCHIDOS!";
                header("refresh:2;url=index.html");
            }
        }
    }
    $conn->close();
?>