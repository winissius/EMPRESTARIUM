<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Logada</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body>
<?php
    include('loginChecker.php');
    include_once("conexao.php");
    $user = $_SESSION['usuario'];
    $query = "SELECT * FROM usuario WHERE usuario='$user'";
    $resultado = mysqli_query($conexao, $query);
    $row_usuario = mysqli_fetch_assoc($resultado);
?>
    <header name="arealogada">
        <h1>EMPRESTARIUM</h1>
        <h1><img align: src="images/logo-preto-200.jpg" alt="logo-preto-200"></h1>
        <h2>Bem vindo(a), <?php echo $_SESSION['usuario']; ?></h2>
        <hr size="1" width="100%">
   </header>
   <h2 id='emprestimos'> Meus items disponíveis para emprestimo ou emprestados</h2> 
    <?php
        include("emprestimos.php");

        if(isset($_SESSION['itensExcluidos'])):
        ?>
        <div id='login' style="height: 50px;">
                <p>Item excluido com sucesso</p>
        </div>
        <?php
        endif;
        unset($_SESSION['itensExcluidos']); 
        ?>  
    <hr size="1" width="100%">
     <h2 id="devolucao"> Itens emprestados de outras pessoas</h2> 
    <?php
        include("emprestados.php")
    ?>
        <?php
            if(isset($_SESSION['devolucao'])):
          ?>
          <div id="cadastro" style="height: 50px;" >
            <p>Devolvido com sucesso!</p>
          </div>
          <?php
            endif;
            unset($_SESSION['devolucao']);
    ?>
    <?php
        include("atrasados.php")
    ?>
   <h2>Cadastrar novo item</h2>
   <hr size="1" width="100%">
    <div id="cadastroItens" style="height: auto;">
        <form name="cadastroItems" action="cadastroItens.php" method="post">
            <table>
                <tr>
                    <td><label for="descricao">Descrição:</label></td>
                    <td><input type="text" id="descricao" name="descricao" placeholder="Insira aqui a descrição do produto" size="30" autocomplete="off" required></td>
                </tr>
                <tr>
                    <td><label for="tipo">Tipo:</label></td>
                    <td><select name="tipo" id="tipo">
                        <option value="livro">Livro</option>
                        <option value="eletronico">Eletrônico</option>
                        <option value="vestuario">Vestuário</option>
                        <option value="midia">Mídia</option></td>
                </tr>
                <tr>
                    <td><label for="quantidade">Quantidade</label></td>
                    <td>
                        <select name="quantidade" id="quantidade">
                        <option value="1">01</option>
                        <option value="2">02</option>
                        <option value="3">03</option>
                        <option value="4">04</option>
                        <option value="5">05</option>
                        <option value="6">06</option>
                        <option value="7">07</option>
                        <option value="8">08</option>
                        <option value="9">09</option>
                        <option value="10">10</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="data-disponivel">Data de disponibiidade</label></td>
                    <td>
                        <input type="date" id="data-disponivel" name="disponibilidade" placeholder="XX/XX/XX" autocomplete="off" required>
                    </td>
                </tr>
                <tr>
                    <td><label for="data-retorno">Data de devolução</label></td>
                    <td>
                        <input type="date" id="data-retorno" name="devolucao" placeholder="XX/XX/XX" autocomplete="off" required>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2"><input type="submit" value="Cadastrar"></td>
                </tr>
            </table>
            </form>
    </div>
    <?php
              if(isset($_SESSION['sucesso'])):
            ?>
            <div id="cadastro" style="height: 50px;">
              <p>Cadastrado com sucesso!</p>
            </div>
            <?php
              endif;
              unset($_SESSION['sucesso']);
            ?>

            <?php
              if(isset($_SESSION['falha'])):
            ?>
            <div id="cadastro" style="height: 50px;">
              <p>Falha ao cadastrar!</p>
            </div>
            <?php
              endif;
              unset($_SESSION['falha']);
    ?>
   <hr size="1" width="100%">  
   <h2>Emprestar um item</h2>
   <hr size="1" width="100%">
    <div id="buscaItens" style="height: auto;">
        <form name="buscaItens" action="buscaItens.php" method="post">
            <table>
                <tr>
                    <td><label for="tipo">Tipo:</label></td>
                    <td>
                        <select name="tipo" id="tipo">
                            <option value="livro">Livro</option>
                            <option value="eletronico">Eletrônico</option>
                            <option value="vestuario">Vestuário</option>
                            <option value="midia">Mídia</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="data-disponivel">Data de disponibiidade</label></td>   
                    <td><input type="date" id="data-disponivel" name="disponibilidade" placeholder="XX/XX/XX" required></td>     
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Buscar"></td>
                </tr>
            </table>
          </form>
    </div>
    <?php
            if(isset($_SESSION['emprestimo'])):
          ?>
          <div id="cadastro" style="height: 50px;" >
            <p>Emprestado com sucesso!</p>
          </div>
          <?php
            endif;
            unset($_SESSION['emprestimo']);
    ?>
   <hr size="1" width="100%"> 
   <h2>Meus dados</h2>
      <hr size="1" width="100%"> 
      <div id="buscaItens">
        <table>
            <tr>
                <td colspan='2'> Nome </td>
                <td > <?php echo $row_usuario['nome'] ?> </td>
            </TR>
            <TR>
                <td colspan='2'> Email </td>
                <td> <?php echo $row_usuario['email'] ?> </td>
            </TR>
            <tr>
                <td colspan='2'> Celular </td>
                <td> <?php echo $row_usuario['telefone'] ?> </td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td colspan="2">
                    <a href="alterarDados.php">Alterar dados</a>
                </td>
            </tr>
        </table>
      </div> 
   <hr size="1" width="100%"> 
   <h2>Deslogar</h2>
   <hr size="1" width="100%"> 
   <a href="logout.php">Deslogar</a>
   <footer>
    <hr size="1" width="100%">
    <p>Fale com a gente</p>
    <a href="mailto:winissius.m@gmail.com">Contato e-mail</a>
    <p><br>Referência da imagem de fundo: © Daniel Leone / Unsplash</p>
</footer>
</body>
</html>