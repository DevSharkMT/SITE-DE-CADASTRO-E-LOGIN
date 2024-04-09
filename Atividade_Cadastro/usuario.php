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
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    
    $connect = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connect,"atividade_cadastro_php");

    $query = "INSERT INTO usuarios(login,senha) VALUES ('$login','$senha')";
    $insert = mysqli_query($connect,$query);

    if($insert){
        echo"<div class=\"alert alert-success\" role=\"alert\">USUÁRIO CADASTRADO COM SUCESSO!</div>";
        header("refresh:2;url=menu.html");
    }else{
        echo "NÃO FOI POSSÍVEL CADASTRAR O USUÁRIO!";
        header("refresh:2;url=cad_usuario.html");
    }
?>