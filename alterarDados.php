<?php
    session_start();
    include_once("conexao.php");
    $user = $_SESSION['usuario'];
    $query = "SELECT * FROM usuario WHERE usuario='$user'";
    $resultado = mysqli_query($conexao, $query);
    $row_usuario = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar dados - Emprestarium</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body>
    <header>
        <h1>EMPRESTARIUM</h1>
        <h1><img align: src="images/logo-preto-200.jpg" alt="logo-preto-200"></h1>
        <hr size="1" width="100%">
        <h2>Bem vindo(a), <?php echo $_SESSION['usuario']; ?></h2>
        <hr size="1" width="100%">
   </header>
   <main>
        <h2>Edição de dados</h1> 
            <hr size="1" width="100%">
            <div id="cadastro">
                <form method="post" action="alterarDadosDB.php" id="formLogin"> 
                  <input type="hidden" name='id' value="<?php echo $row_usuario['usuarioID']?>">
                  <p> 
                    <label for="nome_cad">Nome completo</label><br>
                    <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="nome" value="<?php echo $row_usuario['nome'] ?>" size="39"/>
                  </p>
                   
                  <p> 
                    <label for="email_cad">E-mail</label><br>
                    <input id="email_cad" name="email_cad" required="required" type="email" placeholder="contato@htmlecsspro.com" value="<?php echo $row_usuario['email'] ?>"size="39"/> 
                  </p>

                  <p> 
                    <label for="telefone_cad">Usuario</label><br>
                    <input id="telefone_cad" name="user_cad" required="required" type="tel" placeholder="user00" value="<?php echo $row_usuario['usuario'] ?>"size="39"/> 
                  </p>

                  <p> 
                    <label for="telefone_cad">Telefone</label><br>
                    <input id="telefone_cad" name="fone_cad" required="required" type="tel" placeholder="041987654321" value="<?php echo $row_usuario['telefone'] ?>"size="39"/> 
                  </p>
                   
                  <p> 
                    <label for="senha_cad">Senha</label><br>
                    <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="ex. 1234" value="<?php echo $row_usuario['senha'] ?>" size="39"/>
                  </p>

                  <p> 
                    <label for="senha_cad2">Repita sua senha</label><br>
                    <input id="senha_cad2" name="senha_cad2" required="required" type="password" placeholder="ex. 1234" value="<?php echo $row_usuario['senha'] ?>" size="39"/>
                  </p>
                   
                  <p> 
                    <button type="submit" >Editar</button>
                  </p>
                   
                  <p class="link">  
                    Já tem conta?<br>
                    <a href="/emprestarium/login.php"> Ir para Login </a>
                  </p>
                </form>
            </div>
            <?php
              if(isset($_SESSION['sucesso'])):
            ?>
            <div id="cadastro" style="height: 50px;">
              <p>Sucesso em alterar os dados!<a href="/emprestarium/arealogada.php"> Ir para área logada</a></p>
            </div>
            <?php
              endif;
              unset($_SESSION['sucesso']);
            ?>

            <?php
              if(isset($_SESSION['falha'])):
            ?>
            <div id="cadastro" style="height: 50px;">
              <p>Falha no alterar os dados</p>
            </div>
            <?php
              endif;
              unset($_SESSION['falha']);
            ?>
    </main>
    <footer>
        <hr size="1" width="100%">
        <p>Fale com a gente</p>
        <a href="mailto:winissius.m@gmail.com">Contato e-mail</a>
   </footer>
</body>
</html>