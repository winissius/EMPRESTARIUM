<hr size="1" width="100%">
        <?php
            $query = "SELECT descricao, tipo, quantidade, disponibilidade, devolucao, tomador, devolvido, statusDevolucao, id FROM itens WHERE dono='$user' order by devolucao asc";
            $resultado = mysqli_query($conexao, $query);
            $linhas = mysqli_fetch_assoc($resultado);
            if(isset($linhas)):
            ?>
            <div id='login' style="width: 75%;">
                <form action=""></form>
                                <table>
                                    <tr >
                                        <td colspan="3">DESCRIÇÃO</td><td style="text-align: center;">TIPO</td><td colspan="3">QTD</td><td colspan="3">DISPONIBILIDADE</td><td colspan="3" td style="text-align: center;">DEVOLUÇÃO PREVISTA</td><td>EMPRESTADOR</td><td style="text-align: center"> CONTATO EMPRESTADOR</td><td style="text-align: center;">DEVOLUÇÃO REALIZADA</td><td style="text-align: center;">STATUS</td><td></td>
                                    </tr>
                                    
            <?php
            if((count($linhas))>0){
                do {
                    $tomador = $linhas['tomador'];
                    $query2 = "SELECT telefone FROM usuario WHERE usuario='$tomador'";
                    $resultado2 = mysqli_query($conexao, $query2);
                    $linha2 = mysqli_fetch_assoc($resultado2);
                    ?>
                    <tr>
                        <td colspan="3"><?=$linhas['descricao']?></td>
                        <td style="text-align: center;"><?=$linhas['tipo']?></td>
                        <td style="text-align: center;" colspan="3"><?=$linhas['quantidade']?></td>
                        <td style="text-align: center;" colspan="3"><?=date("d-m-Y", strtotime($linhas['disponibilidade']))?></td>
                        <td style="text-align: center;" colspan="3"><?=date("d-m-Y", strtotime($linhas['devolucao']))?></td>
                        <td style="text-align: center;"><?=$linhas['tomador']?></td>
                        <td style="text-align: center;"><?=isset($linha2['telefone']) ? $linha2['telefone'] : ''?></td>
                        <td style="text-align: center;"><?=isset($linhas['devolvido']) ? date("d-m-Y", strtotime($linhas['devolvido'])) : $linhas['devolvido']?></td>
                        <td style="text-align: center;"><?=$linhas['statusDevolucao']?></td>
                        <?php
                        if($linhas['statusDevolucao'] == 'Disponível'):
                        ?>
                        <td><form action="excluirItens.php" method="post">
                            <input type="hidden" name="user" value="<?=$_SESSION['usuario']?>">
                            <input type="hidden" name="id" value ="<?=$linhas['id']?>">
                            <input type="submit" value="Excluir">
                        </form></td>
                        <?php endif ?>
                    </tr>
                                
                                  
                    <?php
                            }while($linhas = mysqli_fetch_assoc($resultado));
                        }
                        endif
                    ?>
                    </table>       
            </div>
   