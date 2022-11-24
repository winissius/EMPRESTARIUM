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
            if(isset($linhas)):
            ?>
            <div id='login' style="width: 850px;">
                <form action=""></form>
                                <table>
                                    <tr >
                                        <td colspan="3">DESCRIÇÃO</td><td style="text-align: center;">TIPO</td><td colspan="3">QTD</td><td colspan="3">DISPONIBILIDADE</td><td colspan="3">DEVOLUÇÃO</td><td>DONO</td>
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
                    </tr>                    
                    <?php
                            }while($linhas = mysqli_fetch_assoc($resultado));
                        }else{
                            echo "Nenhum item encontrado";
                        }
                    endif;
                    ?>
                    </table>       
            </div>
   <hr size="1" width="100%">