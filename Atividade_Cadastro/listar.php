<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/listar.css">
</head>
<body>
    <style>
        body {
            background-image: url(Imagens/lol_2.webp);
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
    <center>
    <div class="imagem">
        <center>
            <img src="Imagens/tuba.png" alt="error">
        </center> 
    </div>
    <h1 class="listagem_text">LISTAGEM DOS CLIENTES</h1>
        <table class="tabela_listar">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">NOME</th>
                <th scope="col">NASCIMENTO</th>
                <th scope="col">IDADE</th>
                <th scope="col">CPF</th>
                <th scope="col">E-MAIL</th>
                <th scope="col">TELEFONE</th>
                <th scope="col" colspan="2" style="text-align: jcenter;">AÇÕES</th>
                </tr>
            </thead>

            <?php
                require_once "conexao.php";

                $sql_query = "SELECT  * FROM clientes";
                if ($result = $conn ->query($sql_query)) {
                    while ($row = $result->fetch_assoc()) {
                        $id_login = $row['id_login'];
                        $nome = $row['nome'];
                        $nascimento = $row['nascimento'];
                        $idade = $row['idade'];
                        $cpf = $row['cpf'];
                        $e_mail = $row['e_mail'];
                        $telefone = $row['telefone'];
                
            ?>

            <tr class="trow">
                <td><?php echo $id_login; ?></td>
                <td><?php echo $nome; ?></td>
                <td><?php echo $nascimento; ?></td>
                <td><?php echo $idade; ?></td>
                <td><?php echo $cpf; ?></td>
                <td><?php echo $e_mail; ?></td>
                <td><?php echo $telefone; ?></td>

                <td>
                    <button>
                        <a href="update.php?id_login=<?php echo $id_login; ?>" class="botao_upgrade" style="color: aqua;">EDITAR</a>
                    </button>
                </td>
                <td>
                    <button>
                        <a href="deletar.php?id_login=<?php echo $id_login; ?>" onclick="return confirm('Tem certeza que deseja excluir este registro?')" class="botao_deletar" style="color: red;">EXCLUIR</a>
                    </button>
                </td>
            </tr>
                <?php
                        }
                    }
                    $conn->close();
                ?>   
        </table>
    </center>
</body>
</html>