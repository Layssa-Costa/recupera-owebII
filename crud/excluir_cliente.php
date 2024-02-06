<?php
include_once 'php_action/db_connect.php';

if(isset($_POST['cliente_id'])) {
    $id = mysqli_escape_string($connect, $_POST['cliente_id']);

    $sql = "DELETE FROM clientes WHERE id='$id'";

    $resultado = mysqli_query($connect, $sql);
   
}

header('Location: index.php');
exit();
?>