<?php
session_start();
include('conexao.php');
        /*if (empty($_POST['user']) || empty($_POST['password'])){
            header('Location: login.php');
            exit();
        }*/

        $user = mysqli_real_escape_string($conexao, $_POST['user']);
        $password = mysqli_real_escape_string($conexao, $_POST['password']);

        $query ="select usuarioID, usuario from usuario where usuario='{$user}' and senha= md5('{$password}')";

        $result = mysqli_query($conexao, $query);

        $row_validacao = mysqli_num_rows($result);

        if ($row_validacao == 1){
            $_SESSION['usuario'] = $user;
            header('Location: arealogada.php');
            exit();
        }else{
            header('Location: login.php');
            exit();
        }
    ?>
?>

