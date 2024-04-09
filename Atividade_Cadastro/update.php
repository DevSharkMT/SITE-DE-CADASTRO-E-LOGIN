<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO D CLIENTES</title>
</head>

<body>
    
    <h1 style="text-align: center;margin: 50px 0;">ATUALIZAR CLIENTE</h1>
    <div class="atualizar">
        <?php 
            require_once "conexao.php";
            @$sql_query = "SELECT * FROM clientes WHERE id_login = ".$_GET["id_login"];
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
            <?php echo $id_login?>
            <form method="POST" action="atualizar.php">
                    <input type="hidden" class="botao_1" value="<?php echo $id_login; ?>" name="id_login" id="id_login" required>
                    
                    <div class="mb-3">
                        <label class="form-label">Nome:</label>
                        <input type="text" class="botao_1" value="<?php echo $nome; ?>" name="nome" id="nome" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nascimento:</label>
                        <input type="date" class="botao_1" value="<?php echo $nascimento; ?>" name="nascimento" id="nascimento" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Idade:</label>
                        <input type="text" class="botao_1" value="<?php echo $idade; ?>" name="idade" id="idade" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">CPF:</label>
                        <input type="text" class="botao_1" value="<?php echo $cpf; ?>" name="cpf" id="cpf" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">E-mail:</label>
                        <input type="email" class="botao_1" value="<?php echo $_email; ?>" name="e_mail" id="e_mail" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Telefone:</label>
                        <input type="tel" class="botao_1" value="<?php echo $telefone; ?>" name="telefone" id="telefone" required>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="botao-atualizar">ATUALIZAR</button>
                    </div>
            </form>
            <?php 
                }
            }
                $conn->close();
            ?>
    </div>      
    
</body>

</html>