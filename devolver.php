<?php
include('conexao.php');
session_start();
$id = $_POST['id'];
$user = $_POST['user'];


echo $id;
echo $user;
$query = "UPDATE itens SET tomador=NULL WHERE id='$id'";
$resultado = mysqli_query($conexao, $query);

if(mysqli_affected_rows($conexao)){
    $_SESSION['devolucao'] = true;
    header("Location: buscaItens.php");
}

header('Location: arealogada.php#devolucao');
exit;
?>