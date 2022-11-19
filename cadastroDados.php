<?php
    $cadastroNome = $_POST['nome_cad'];
    echo "Nome completo: $cadastroNome <br>";
    $cadastroEmail = $_POST['email_cad'];
    echo "E-mail: $cadastroEmail <br>";
    $cadastroUser = $_POST['user_cad'];
    echo "Usuário: $cadastroUser <br>";
    $cadastroSenha = $_POST['senha_cad'];
    echo "Senha 1: $cadastroSenha <br>";
    $cadastroSenha2 = $_POST['senha_cad2'];
    echo "Senha 2: $cadastroSenha2 <br>";

    session_start();
    include('conexao.php');

    $nome = mysqli_real_escape_string($conexao, trim($_POST['nome_cad']));
    $usuario = mysqli_real_escape_string($conexao, trim($_POST['user_cad']));
    $email = mysqli_real_escape_string($conexao, trim($_POST['email_cad']));
    $fone = mysqli_real_escape_string($conexao, trim($_POST['fone_cad']));
    $senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha_cad']))); 
    $confirmaSenha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha_cad2'])));
    
    $query = "select count(*) as total from usuario where usuario = '{$usuario}'";
    $result = mysqli_query($conexao, $query);
    $row_validacao = mysqli_fetch_assoc($result);
    
    if($row_validacao['total'] == 1){
        $_SESSION['user_existente'] = true;
        header('Location: cadastro.php');
        exit;
    }

    $query = "INSERT INTO usuario (nome, email, usuario, telefone, senha, dataCadastro) values ('$nome', '$email', '$usuario', '$fone', '$senha', NOW())";

    if($conexao -> query($query) === TRUE){
        $_SESSION['finalizado_cadastro'] = true;
    }

    $conexao -> close();

    header('Location: cadastro.php');
    exit;
?>