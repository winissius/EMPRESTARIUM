<?php
    session_start();
    include('conexao.php');
    $user = $_SESSION['usuario'];
    $query = "SELECT * FROM usuario WHERE usuario='$user'";
    $resultado = mysqli_query($conexao, $query);
    $row_usuario = mysqli_fetch_assoc($resultado);

    // echo $row_usuario['telefone'];
    $usuario = $_SESSION['usuario'];
    $telefone = $row_usuario['telefone'];
    $descricao = mysqli_real_escape_string($conexao, trim($_POST['descricao']));
    $tipo = mysqli_real_escape_string($conexao, trim($_POST['tipo']));
    $quantidade = mysqli_real_escape_string($conexao, trim($_POST['quantidade']));
    $disponibiidade = mysqli_real_escape_string($conexao, trim($_POST['disponibilidade']));
    $devolucao = mysqli_real_escape_string($conexao, trim($_POST['devolucao'])); 
    $dono = mysqli_real_escape_string($conexao, $usuario);
    $contatoDono = mysqli_real_escape_string($conexao, $telefone);

    $query = "INSERT INTO itens (descricao, tipo, quantidade, disponibilidade, devolucao, dono, contatoDono) values ('$descricao', '$tipo', $quantidade, '$disponibiidade', '$devolucao', '$dono', '$contatoDono')";

    $resultado = mysqli_query($conexao, $query);

    if(mysqli_affected_rows($conexao)){
        $_SESSION['sucesso'] = true;
        header("Location: arealogada.php");
    }else{
        $_SESSION['falha'] = true;
        header("Location: arealogada.php");
    }
?>