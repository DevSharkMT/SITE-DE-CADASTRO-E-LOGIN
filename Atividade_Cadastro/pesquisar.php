<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="tabela_pesquisar">
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
    </div>
    <?php
        require_once "conexao.php";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $dado = $_POST["dado"];
            $sql_query = "SELECT * FROM clientes WHERE cpf = $dado OR id_login = $dado";
            if ($result = $conn ->query($sql_query)) {
                while ($row = $result -> fetch_assoc()) { 
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
        <td><a href="update.php?id_login=<?php echo $id_login; ?>" class="botao_upgrade">Editar</a></td>
        <td><a href="deletar.php?id_login=<?php echo $id_login; ?>" onclick="return confirm('Tem certeza que deseja deletar este registro?')" class="botao_deletar">Excluir</a></td>
    </tr>
    <?php
                }
            }    
        }
        $conn->close(); 
    ?>
</body>
</html>