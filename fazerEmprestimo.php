<?php
include('conexao.php');
session_start();
$id = $_POST['id'];
$user = $_POST['user'];
// $tipo = $_POST['tipo'];
// $data = $_POST['disponibilidade'];

echo $id;
echo $user;
$query = "UPDATE itens SET tomador='$user' WHERE id='$id'";
$resultado = mysqli_query($conexao, $query);

header('Location: buscaItens.php');
exit;
?>

