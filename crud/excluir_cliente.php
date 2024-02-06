<?php
include_once 'php_action/db_connect.php';

if(isset($_GET['id'])) {
    $id = mysqli_escape_string($connect, $_GET['id']);
    excluirCliente($connect, $id);
    
}

header('Location: index.php');
exit();
?>

