<?php
include_once "db_connect.php";

if(isset ($_POST['cadastrar'])){
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $cidade = mysqli_escape_string($connect, $_POST['cidade']);

    $sql = "INSERT INTO clientes (nome, email, cidade) VALUES ('$nome', '$email', '$cidade')";

 /*   if (mysqli_query($connect, $sql)) {
        echo "cadastro ok";
    }
    else {
        echo "error";
    }
    */
}