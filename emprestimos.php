<hr size="1" width="100%">
        <?php
            $query = "SELECT descricao, tipo, quantidade, disponibilidade, devolucao, tomador FROM itens WHERE dono='$user' order by devolucao asc";
            $resultado = mysqli_query($conexao, $query);
            $linhas = mysqli_fetch_assoc($resultado);
            if(isset($linhas)):
            ?>
            <div id='login' style="width: 60%;">
                <form action=""></form>
                                <table>
                                    <tr >
                                        <td colspan="3">DESCRIÇÃO</td><td style="text-align: center;">TIPO</td><td colspan="3">QTD</td><td colspan="3">DISPONIBILIDADE</td><td colspan="3">DEVOLUÇÃO</td><td>EMPRESTADOR</td>
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
                        <td style="text-align: center;"><?=$linhas['tomador']?></td>
                    </tr>
                                
                                  
                    <?php
                            }while($linhas = mysqli_fetch_assoc($resultado));
                        }
                        endif
                    ?>
                    </table>       
            </div>
   <hr size="1" width="100%">