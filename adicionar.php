<?php
    include_once 'includes/header.php';
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>     
    <script>
        $('.dinheiro').mask('#.##0,00', {reverse: true});
    </script> 

    <div class="row">
        <div class="col s12 m6 push-m3">
          <h3 class="light">Novo Produto</h3>
           <form action="php_action/create.php" method="POST">
                <div class="input-field col s12">
                
                   
                   <p>Categoria</p> 
                      <select name="categoria">
                        <option value=""></option>
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

                    <select name="modelo">
                    <div  class="hidden modelo-f1">
                    <option value=""></option>
                        <option value="Arroz">Arroz </option>
                        <option value="Feijão">Feijão</option>
                        <option value="Farinha">Farinha</option>
                        </div>
                    </select>
                    
                </div>

                <div class="input-field col s12">
                    <input type="number" name="quantidade" id="quantidade">
                    <label for="quantidade">Quantidade</label>
                </div>

                <div class="input-field col s12">
                <label for="dinheiro">R$</label>
                <input type="text" id="dinheiro" name="valor" class="dinheiro form-control" style="display:inline-block" />
                </div>

                <button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
                <a href="index.php" class="btn green">Listar Produtos</a>
           </form>
        </div>
    </div>
    <?php
    include_once 'includes/footer.php';
    ?>