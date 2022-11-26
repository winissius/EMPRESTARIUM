<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Emprestarium</title>
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
        <h2>Cadastro</h1> 
            <hr size="1" width="100%">
            <div id="cadastro">
                <form method="post" action="cadastroDados.php" id="formLogin"> 
                  <p> 
                    <label for="nome_cad">Nome completo</label><br>
                    <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="nome" size="39"/>
                  </p>
                   
                  <p> 
                    <label for="email_cad">E-mail</label><br>
                    <input id="email_cad" name="email_cad" required="required" type="email" placeholder="contato@htmlecsspro.com" size="39"/> 
                  </p>

                  <p> 
                    <label for="telefone_cad">Usuario</label><br>
                    <input id="telefone_cad" name="user_cad" required="required" type="tel" placeholder="user00" size="39"/> 
                  </p>

                  <p> 
                    <label for="telefone_cad">Telefone</label><br>
                    <input id="telefone_cad" name="fone_cad" required="required" type="tel" placeholder="041987654321" size="39"/> 
                  </p>
                   
                  <p> 
                    <label for="senha_cad">Senha</label><br>
                    <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="ex. 1234" size="39"/>
                  </p>

                  <p> 
                    <label for="senha_cad2">Repita sua senha</label><br>
                    <input id="senha_cad2" name="senha_cad2" required="required" type="password" placeholder="ex. 1234" size="39"/>
                  </p>
                   
                  <p> 
                    <button type="submit" >Criar</button>
                  </p>
                   
                  <p class="link">  
                    Já tem conta?<br>
                    <a href="/emprestarium/login.php"> Ir para Login </a>
                  </p>
                </form>
            </div>
            <?php
              if(isset($_SESSION['finalizado_cadastro'])):
            ?>
            <div id="cadastro" style="height: 50px;">
              <p>Cadastro realizado com sucesso</p>
            </div>
            <?php
              endif;
              unset($_SESSION['finalizado_cadastro']);
            ?>

            <?php
              if(isset($_SESSION['user_existente'])):
            ?>
            <div id="cadastro" style="height: 50px;">
              <p>Usuario já cadastrado</p>
            </div>
            <?php
              endif;
              unset($_SESSION['user_existente']);
            ?>
    </main>
    <footer>
        <hr size="1" width="100%">
        <p>Fale com a gente</p>
        <a href="mailto:winissius.m@gmail.com">Contato e-mail</a>
        <p><br>Referência da imagem de fundo: © Daniel Leone / Unsplash</p>
   </footer>
</body>
</html>