<?php
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $entrar = $_POST["entrar"];
    $connect = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connect,"atividade_cadastro_php");
    if (isset($entrar)) {

        $verifica = mysqli_query($connect, "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'")
        or die("erro ao selecionar");
        if (mysqli_num_rows($verifica)<=0){
            echo"<div class=\"alert alert-warning\" role=\"alert\">ERRO AO INICIAR O LOGIN!</div>";
            header("refresh:2;url=index.html");
            die();

        }else{

            setcookie("login",$login);
            header("Location:menu.html");
        }
    }
?>