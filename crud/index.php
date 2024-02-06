<?php
include_once 'php_action/db_connect.php';

// Função para excluir cliente
function excluirCliente($connect, $id) {
    $sql = "DELETE FROM clientes WHERE id = '$id'";
    mysqli_query($connect, $sql);
}

// Função para alterar cliente
function alterarCliente($connect, $id, $nome, $email, $cidade) {
    $sql = "UPDATE clientes SET nome = '$nome', email = '$email', cidade = '$cidade' WHERE id = '$id'";
    mysqli_query($connect, $sql);
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Clientes</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main">
        <h2>Lista de Clientes</h2>
        <table class="tabela">
            <thead>
                <th>Nome</th>
                <th>Email</th>
                <th>Cidade</th>
                <th>Ações</th>
            </thead>
            <tbody>

            <?php
                $sql = "SELECT * FROM clientes";
                $resultado = mysqli_query($connect, $sql);
                while ($dados = mysqli_fetch_array($resultado)):
            ?>
            <tr>
                <td><?php echo $dados['nome'];?></td>
                <td><?php echo $dados['email'];?></td>
                <td><?php echo $dados['cidade'];?></td>
                <td>
                    <a href="editar_cliente.php?id=<?php echo $dados['id']; ?>">
                        <button>Alterar</button>
                    </a>
                    <a href="excluir_cliente.php?id=<?php echo $dados['id']; ?>">
                        <button>Excluir</button>
                    </a>
                </td>
            </tr>
            <?php endwhile; ?>

            </tbody>
        </table>
        <a href="add_cliente.php">
            <input class="btn" type="button" value="Cadastrar Cliente">
        </a>
    </div>
</body>
</html>
