<?php
    session_start();
    include('conexao.php');
    $query = "SELECT * FROM usuario WHERE usuario='$user'";
    $resultado = mysqli_query($conexao, $query);
    $row_usuario = mysqli_fetch_assoc($resultado);

?>