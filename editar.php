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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>     
    <script>
        $('.dinheiro').mask('#,##0,00', {reverse: true});
    </script> 

    <div class="row">
        <div class="col s12 m6 push-m3">
          <h3 class="light">Editar Produto</h3>
           <form action="php_action/update.php" method="POST">
           <input type="hidden" name="id"value="<?php echo $dados['id'];?>">

                <div class="input-field col s12">
                <label for="categoria">categoria</label><br>
                      <select name="categoria" value="">
                        <option value="<?php echo $dados['categoria'];?>"><?php echo $dados['categoria'];?></option>
                        <option value="Alimentos">Alimentos</option>
                        <option value="Bebidas">Bebidas</option>
                        <option value="Carnes">Carnes</option>
                        <option value="Frios">Frios</option>
                        <option value="Frutas, Verduras e Legumes">Frutas, Verduras e Legumes</option>
                        <option value="Higiene">Higiene</option>
                        <option value="Limpeza">Limpeza</option>
                        <option value="Padaria">Padaria</option>
                        <option value="Outros">Outros</option>
                       </select>
                   
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
                <label for="dinheiro">R$</label>
                <input type="text" id="dinheiro" name="valor" class="dinheiro form-control" value="<?php echo $dados['valor'];?>" style="display:inline-block" />
               
                </div>

                <button type="submit" name="btn-editar" class="btn">Atualizar</button>
                <a href="index.php" class="btn green">Listar Produtos</a>
           </form>
        </div>
    </div>

    <?php
    include_once 'includes/footer.php';
    ?>