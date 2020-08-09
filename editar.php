<?php

include_once 'php_action/db_connect.php';
    include_once 'includes/header.php';

    if(isset($_GET['id'])):
        $id = mysqli_escape_string($connect, $_GET['id']);

        $sql = "SELECT * FROM estoque WHERE id = '$id'";
        $resultado = mysqli_query($connect, $sql);
        $dados = mysqli_fetch_array($resultado);
    endif;
    ?>

    <div class="row">
        <div class="col s12 m6 push-m3">
          <h3 class="light">Editar Produto</h3>
           <form action="php_action/update.php" method="POST">
           <input type="hidden" name="id"value="<?php echo $dados['id'];?>">

                <div class="input-field col s12">
                    <input type="text" name="categoria" id="categoria" value="<?php echo $dados['categoria'];?>">
                    <label for="categoria">Categoria</label>
                </div>

                <div class="input-field col s12">
                    <input type="text" name="modelo" id="modelo" value="<?php echo $dados['modelo'];?>">
                    <label for="modelo">Modelo</label>
                </div>

                <div class="input-field col s12">
                    <input type="number" name="quantidade" id="quantidade" value="<?php echo $dados['quantidade'];?>">
                    <label for="quantidade">Quantidade</label>
                </div>

                <div class="input-field col s12">
                    <input type="number" name="valor" id="valor" value="<?php echo $dados['valor'];?>">
                    <label for="valor">Valor</label>
                </div>

                <button type="submit" name="btn-editar" class="btn">Atualizar</button>
                <a href="index.php" class="btn green">Listar Produtos</a>
           </form>
        </div>
    </div>

    <?php
    include_once 'includes/footer.php';
    ?>