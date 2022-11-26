<?php
include('conexao.php');
session_start();
$id = $_POST['id'];
$user = $_POST['user'];
// $tipo = $_POST['tipo'];
// $data = $_POST['disponibilidade'];

echo $id;
echo $user;
$query = "UPDATE itens SET tomador='$user', statusDevolucao='Emprestado' WHERE id='$id'";
$resultado = mysqli_query($conexao, $query);

if(mysqli_affected_rows($conexao)){
    $_SESSION['emprestimo'] = true;
    header("Location: buscaItens.php");
}

header('Location: arealogada.php#buscaItens');
exit;
?>

