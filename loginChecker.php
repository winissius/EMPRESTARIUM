<?php
    session_start();
    if(!$_SESSIOM['usuario']){
        header('Location:loginDados.php');
        exit();
    }
    ?>