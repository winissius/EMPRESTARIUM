<?php
    session_start();
    include('conexao.php');
    $id = $_POST['id'];
    $user = $_POST['user'];
    echo $id;
    $query = "DELETE FROM itens WHERE id = '$id'";
    $resultado = mysqli_query($conexao, $query);

    if(mysqli_affected_rows($conexao)){
        $_SESSION['itensExcluidos'] = true;
        header("Location: arealogada.php#emprestimos");
    }

    header('Location: arealogada.php#emprestimos');
    exit;
?>