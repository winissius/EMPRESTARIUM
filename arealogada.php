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
    ?>
    <header name="arealogada">
        <h1>EMPRESTARIUM</h1>
        <h1><img align: src="images/logo-preto-200.jpg" alt="logo-preto-200"></h1>
        <h2>Bem vindo, <?php echo $_SESSION['usuario']; ?></h2>
        <hr size="1" width="100%">
   </header>
   <h2>Meus items emprestados</h2> 
   <hr size="1" width="100%">
   <h2>Cadastrar novo item</h2>
   <hr size="1" width="100%">
    <div id="cadastroItens">
        <form name="cadastroItems">
            <table>
                <tr>
                    <td><label for="descricao">Descrição:</label></td>
                    <td><input type="text" id="descricao" name="Descrição" placeholder="Insira aqui a descrição do produto" size="50"></td>
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
                        <input type="date" id="data-disponivel" name="Data de disponibiidade" placeholder="XX/XX/XX">
                    </td>
                </tr>
                <tr>
                    <td><label for="data-retorno">Data de devolução</label></td>
                    <td>
                        <input type="date" id="data-retorno" name="Data de devolução" placeholder="XX/XX/XX">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2"><input type="submit" value="Cadastrar"></td>
                </tr>
            </table>
            </form>
    </div>
   <hr size="1" width="100%">  
   <h2>Emperstar um item</h2>
   <hr size="1" width="100%">
    <div id="buscaItens">
        <form name="buscaItems">
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
                    <td><input type="date" id="data-disponivel" name="Data de disponibiidade" placeholder="XX/XX/XX"></td>     
                </tr>
                <tr>
                    <td><label for="data-retorno">Data de devolução</label></td>
                    <td><input type="date" id="data-retorno" name="Data de devolução" placeholder="XX/XX/XX"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Buscar"></td>
                </tr>
            </table>
          </form>
    </div>
   <hr size="1" width="100%">  
   <h2>Meus dados</h2>
      <hr size="1" width="100%"> 
       <table border="1" cellpadding="5" align="center">
        <tr>
            <th colspan="5">MEUS DADOS</th>
        <TR>
            <td> Nome </td>
            <td> ValorNome </td>
        </TR>
        <TR>
            <td> Sobrenome </td>
            <td> SobreNome </td>
        </TR>
        <tr>
            <td> Celular </td>
            <td> NumeroCelular </td>
        </tr>
        <tr>
            <td>Rua</td>
            <td>Rua</td>
        </tr>
        <tr>
            <td>Número</td>
            <td>numerocasa</td>
        </tr>
        <tr>
            <td> Bairro </td>
            <td> Bairro </td>
        </tr>
        <tr>
            <td>Cidade</td>
            <td>cidade</td>
        </tr>
        <tr>
            <td>CEP</td>
            <td>cep</td>
        </tr>
       </table>
   <hr size="1" width="100%"> 
   <h2>Deslogar</h2>
   <hr size="1" width="100%"> 
   <a href="logout.php">Deslogar</a>
   <footer>
    <hr size="1" width="100%">
    <p>Fale com a gente</p>
    <a href="mailto:winissius.m@gmail.com">Contato e-mail</a>
</footer>
</body>
</html>