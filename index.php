<?php


//conexao
include_once 'php_action/db_connect.php';
    //header
    include_once 'includes/header.php';

    include_once 'includes/message.php';
    ?>


    <div class="row">
        <div class="col s12 m6 push-m3">
          <h3 class="light">Sistema de Estoque</h3>
            <table class="striped">
                <thead>
                    <tr>
                        <th>Categoria:</th>
                        <th>Produto:</th>
                        <th>Quantidades:</th>
                        <th>Valor:</th>
                    </tr>
                </thead>

                <tbody>
                    <?php 
                        $sql = "SELECT * FROM estoque";
                        $resultado = mysqli_query($connect, $sql);

                        if(mysqli_num_rows($resultado) > 0):

                        while($dados = mysqli_fetch_array($resultado)):
                    ?>
                    <tr>
                        <td><?php echo $dados['categoria']; ?></td>
                        <td><?php echo $dados['modelo']; ?></td>
                        <td><?php echo $dados['quantidade']; ?></td>
                        <td><?php echo $dados['valor']; ?></td>
                        <td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating blue"><i class="material-icons">edit</i></a></td>

                        <td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating green modal-trigger">
                        <i class="material-icons">delete</i></a></td>

                         <!-- Modal Structure -->
                        <div id="modal<?php echo $dados['id']; ?>" class="modal">
                            <div class="modal-content">
                            <h4>OLÁ</h4>
                            <p>Tem certeza que deseja mesmo Vender?</p>
                            </div>
                            <div class="modal-footer">
                          

                            <form action="php_action/delete.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                                <button type="submit" name="btn-deletar" class="btn red">Sim, quero vender</button>

                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                            </form>

                            </div>
                        </div>

                    </tr>
                        <?php endwhile; 
                        else: ?>

                            <tr>
                                <td>-</td>
                                <td>-</td>
                                <td></td>
                                <td></td>
                            </tr>


                        <?php
                        endif;
                        ?>

                </tbody>
            </table>
            <br>
            <a href="adicionar.php" class="btn">Adicionar Produto</a>
        </div>
    </div>

    <?php
    include_once 'includes/footer.php';
    ?>