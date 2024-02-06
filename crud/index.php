<?php
include_once 'php_action/db_connect.php';
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
                    <form method="post" action="excluir_cliente.php">
                        <input type="hidden" name="cliente_id" value="<?php echo $dados['id']; ?>">
                            <button type="submit" name="excluir_cliente">
                                <img src="img/delete.png" alt="delete">
                            </button>
                    </form>
                </td>
                <td>
                    <form method="post" action="editar_cliente.php">
                        <input type="hidden" name="cliente_id" value="<?php echo $dados['id']; ?>">
                            <button type="submit" name="editar_cliente">
                                <img src="img/edit.png" alt="editar">
                            </button>
                    </form>
                </td>
            </tr>

            <?php
                endwhile;
            ?>

            </tbody>
        </table>
        <a href="add_cliente.php">
            <input class="btn" type="button" value="Cadastrar Cliente">
        </a>

    </div>

</body>
</html>
