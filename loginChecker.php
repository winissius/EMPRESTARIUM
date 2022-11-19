<?php
    session_start();
    /*if(!$_SESSIOM['usuario']){
        header('Location:login.php');
        exit();
    }*/

    if (empty($_SESSION['usuario'])){
            header('Location: login.php');
            exit();
    }
?>
