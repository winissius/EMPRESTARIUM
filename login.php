<?php
    session_start();
    ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Emprestarium</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body>
    <header>
        <h1>EMPRESTARIUM</h1>
        <h1><img align: src="images/logo-preto-200.jpg" alt="logo-preto-200"></h1>
        <hr size="1" width="100%">
   </header>
    <main>
        <h2>Login</h2>
        <hr size="1" width="100%">
        <div id="login">
            <form method="post" action="loginDados.php" id="formCadastro" name="loginForm">
                <table >
                    <tbody>
                        <tr><td><label for="usuario">Usuário</label></td></tr>
                        <tr><td><input type="text" id="usuario" autocomplete="off" size="39px" placeholder="contato@htmlecsspro.com" name="user"></td></tr>
                        <tr><td><label for="password">Senha</label></td></tr>
                        <tr><td><input type="password" id="password" autocomplete="off"size="39px" placeholder="ex. 1234" name="password"></td></tr>
                        <tr><td><button type="submit" >Logar</button></td></tr>
                        <tr><td><a href="#">Esqueceu sua senha?</a></td></tr>
                        <tr><td><a href="/emprestarium/cadastro.php">Não tem conta? Se cadastre</a></td></tr>
                        <tr><td><a href="homepage.html">Voltar</a></td></tr>
                    </tbody>
                </table>
            </form>         
        </div>
        <?php
            if(isset($_SESSION['invalido'])):
        ?>
        <div id='login' style="height: 100px;">
                <p>Usuário ou senha inválida</p>
        </div>
        <?php
        endif;
        unset($_SESSION['invalido']); 
        ?>  
    </main>
    <footer>
        <hr size="1" width="100%">
        <p>Fale com a gente</p>
        <a href="mailto:winissius.m@gmail.com">Contato e-mail</a>
   </footer>
</body>
</html>