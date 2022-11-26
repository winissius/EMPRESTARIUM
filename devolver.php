<?php
include('conexao.php');
session_start();
$id = $_POST['id'];
$user = $_POST['user'];
$devolucao = $_POST['devolucao'];
$hoje = date("Y-m-d");
if($hoje > $devolucao){
    $status = 'Atrasado';
}else{
    $status = 'Entregue no prazo';
}
// $hoje = date('Y/m/d');


echo $id;
echo $user;
$query = "UPDATE itens SET statusDevolucao='$status', devolvido='$hoje' WHERE id='$id'";
$resultado = mysqli_query($conexao, $query);

if(mysqli_affected_rows($conexao)){
    $_SESSION['devolucao'] = true;
    header("Location: arealogada.php#devolucao");
}

header('Location: arealogada.php#devolucao');
exit;
?>