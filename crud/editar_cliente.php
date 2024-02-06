<?php
include_once 'php_action/db_connect.php';

if(isset($_POST['cliente_id'])) {
    $id = mysqli_escape_string($connect, $_POST['cliente_id']);
    
    
    $sql = "SELECT * FROM clientes WHERE id = '$id'";
    
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
}

if(isset($_POST['atualizar'])) {
    $id = mysqli_escape_string($connect, $_POST['id']);
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $cidade = mysqli_escape_string($connect, $_POST['cidade']);

    $sql = "UPDATE clientes SET nome='$nome', email='$email', cidade='$cidade' WHERE id='$id'";

    $resultado = mysqli_query($connect, $sql);

    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleedit.css">

</head>
<body>
    <div class="main">
        <h2>Editar Cliente</h2>
        <form method="post" onsubmit="alert('Editado com sucesso!');">
            <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
            <h3>Nome</h3>
            <input class="j" name="nome" id="nome" value="<?php echo $dados['nome']; ?>" type="text">
            <h3>Email</h3>
            <input class="j" name="email" id="email" value="<?php echo $dados['email']; ?>" type="text">
            <h3>Cidade</h3>
            <input class="j" name="cidade" id="cidade" value="<?php echo $dados['cidade']; ?>" type="text">
            <button class="btn" type="submit" name="atualizar">Atualizar Cliente</button>
        </form>
    </div>
</body>
</html>
