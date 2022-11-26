<?php
    session_start();
    include('conexao.php');
    $id = $_POST['id'];
    $user = $_POST['user'];

    $query = "DELETE FROM usuario WHERE usuarioID = $id";
    $resultado = mysqli_query($conexao, $query);

    if(mysqli_affected_rows($conexao)){
        $_SESSION['excluido'] = true;
        header("Location: login.php");
    }

    header('Location: login.php');
    exit;
?>