<html>
<head>
    <title>CADASTRO DE USUÁRIOS</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<?php
    //<na> usado para barra de navegação

    require_once "conexao.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $nascimento = $_POST["nascimento"];
        $idade = floor(((strtotime(date('Y/m/d')) - strtotime($nascimento)) / 86400) / 365);
        $cpf = $_POST["cpf"];
        $e_mail = $_POST["e_mail"];
        $telefone = $_POST["telefone"];

        if($nome != "" && $nascimento != "" && $idade != "" && $cpf != "" && $e_mail != "" && $telefone != ""){
            $sql = "INSERT INTO clientes (nome, nascimento, idade, cpf, e_mail, telefone) VALUES ('$nome', '$nascimento', '$idade', '$cpf', '$e_mail', '$telefone')";

            if ($conn->query($sql) == TRUE) {
                echo"<div class=\"alert alert-success\" role=\"alert\">CLIENTE CADASTRADO COM SUCESSO!</div>";
                header("refresh:2;url=menu.html");
            } else {
                echo "TODOS OS CAMPOS DEVEM SER PREENCHIDOS!";
                header("refresh:2;url=cadastro.html");
            }
        }
    }
    $conn->close();
?>