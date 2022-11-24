<hr size="1" width="100%">
        <?php
            $query = "SELECT descricao, tipo, quantidade, disponibilidade, devolucao, dono, id FROM itens WHERE tomador='$user' order by devolucao asc";
            $resultado = mysqli_query($conexao, $query);
            $linhas = mysqli_fetch_assoc($resultado);
            if(isset($linhas)):
            ?>
            <div id='login' style="width: 850px;">
                <form action=""></form>
                                <table>
                                    <tr >
                                        <td colspan="3">DESCRIÇÃO</td><td style="text-align: center;">TIPO</td><td colspan="3">QTD</td><td colspan="3">DISPONIBILIDADE</td><td colspan="3">DEVOLUÇÃO</td><td>DONO</td><td>DEVOLVER</td>
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
                        <td><form action="devolver.php" method="post">
                            <input type="hidden" name="user" value="<?=$_SESSION['usuario']?>">
                            <input type="hidden" name="id" value ="<?=$linhas['id']?>">
                            <input type="submit" value="Devolver">
                        </form></td>
                    </tr>
                                
                                  
                    <?php
                            }while($linhas = mysqli_fetch_assoc($resultado));
                        }
                        endif
                    ?>
                    </table>       
            </div>
   <hr size="1" width="100%">