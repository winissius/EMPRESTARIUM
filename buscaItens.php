<hr size="1" width="100%">
        <?php
            session_start();
            include_once("conexao.php");
            $user = $_SESSION['usuario'];
            $tipo = $_POST['tipo'];
            $data = $_POST['disponibilidade'];
            if(isset($data)){
                $data = date('y/m/d');
            }
            $query = "SELECT descricao, tipo, quantidade, disponibilidade, devolucao, tomador, dono FROM itens WHERE tomador IS NULL and dono != '$user' and tipo='$tipo' and disponibilidade > '$data'";
            $resultado = mysqli_query($conexao, $query);
            $linhas = mysqli_fetch_assoc($resultado);
            ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
            <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Emprestimo de itens</title>
                <link rel="stylesheet" href="estilo.css">
                <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
            </head>
            <body>
                <header name="arealogada">
                    <h1>EMPRESTARIUM</h1>
                    <h1><img align: src="images/logo-preto-200.jpg" alt="logo-preto-200"></h1>
                    <h2>Bem vindo(a), <?php echo $_SESSION['usuario']; ?></h2>
                    <hr size="1" width="100%">
                </header>
                <h2>Emprestar um item</h2>
                <hr size="1" width="100%">
            </body>
            </html>
            <?php
            if(isset($linhas)):
            ?>
            <div id='login' style="width: 850px;">
                <form action=""></form>
                                <table>
                                    <tr >
                                        <td colspan="3">DESCRIÇÃO</td><td style="text-align: center;">TIPO</td><td colspan="3">QTD</td><td colspan="3">DISPONIBILIDADE</td><td colspan="3">DEVOLUÇÃO</td><td>DONO</td><td>EMPRESTAR</td>
                                    </tr>
            <?php
            if((count($linhas))>0){
                do {
                    ?>
                    <tr>
                        <td colspan="3"><?=$linhas['descricao']?></td>
                        <td style="text-align: center;"><?=$linhas['tipo']?></td>
                        <td style="text-align: center;" colspan="3"><?=$linhas['quantidade']?></td>
                        <td style="text-align: center;" colspan="3"><?=date("d-m-Y", strtotime($linhas['disponibilidade']))?></td>
                        <td style="text-align: center;" colspan="3"><?=date("d-m-Y", strtotime($linhas['devolucao']))?></td>
                        <td style="text-align: center;"><?=$linhas['dono']?></td>
                        <td></td>
                    </tr>                    
                    <?php
                            }while($linhas = mysqli_fetch_assoc($resultado));
                        }else{}
                    endif;
                    ?>
                    </table>       
            </div>
    <hr size="1" width="100%"> 
   <h2>Deslogar</h2>
   <hr size="1" width="100%"> 
   <a href="arealogada.php">Voltar para área loagada</a>
   <hr size="1" width="100%"> 
   <h2>Deslogar</h2>
   <hr size="1" width="100%"> 
   <a href="logout.php">Deslogar</a>
   <footer>
    <hr size="1" width="100%">
    <p>Fale com a gente</p>
    <a href="mailto:winissius.m@gmail.com">Contato e-mail</a>
</footer>

   