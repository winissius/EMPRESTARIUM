<?php
    session_start();
    include("conexao.php");

    $id = filter_input(INPUT_POST, 'id');
    $nome = filter_input(INPUT_POST, 'nome_cad');
    $email = filter_input(INPUT_POST, 'email_cad', FILTER_SANITIZE_EMAIL);
    $usuario = filter_input(INPUT_POST, 'user_cad');
    $telefone = filter_input(INPUT_POST, 'fone_cad');
    $senha = filter_input(INPUT_POST, trim('senha_cad'));
    $confirmaSenha = filter_input(INPUT_POST, trim('senha_cad2'));


    $query = "UPDATE usuario SET nome='$nome', email='$email', usuario='$usuario', telefone = '$telefone', senha='$senha' WHERE usuarioID='$id'";
    $resultado = mysqli_query($conexao, $query);

    if(mysqli_affected_rows($conexao)){
        $_SESSION['sucesso'] = true;
        header("Location: alterarDados.php");
    }else{
        $_SESSION['falha'] = true;
        header("Location: alterarDados.php");
    }
?>