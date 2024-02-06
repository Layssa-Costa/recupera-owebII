<?php
include_once 'php_action/create.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Clientes</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleadd.css">

</head>
<body>
    <div class="main">
        <h2>Cadastro de Clientes</h2>
            <form class="insert" method="post">
                <h3>Nome</h3>
                <input class="i" name="nome" id="nome" placeholder="Nome Completo" type="text">
                
                <h3>Email</h3>
                <input class="i" name="email" id="email" placeholder="Email" type="text">

                <h3>Cidade</h3>
                <input class="i" name="cidade" id="cidade" placeholder="Cidade" type="text">
               
                <button class="btn" type="submit" name="cadastrar">Adicionar Cliente</button>
                    <a href="index.php">
                        <input class="btn" type="button" value="Listar Cliente">
                    </a>
            </form>
          
        

    </div>

</body>
</html>
<?php
include_once "db_connect.php";

if(isset ($_POST['cadastrar'])){
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $cidade = mysqli_escape_string($connect, $_POST['cidade']);

    $sql = "INSERT INTO clientes (nome, email, cidade) VALUES ('$nome', '$email', '$cidade')";

 
}