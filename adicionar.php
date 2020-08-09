<?php
    include_once 'includes/header.php';
    ?>

    <div class="row">
        <div class="col s12 m6 push-m3">
          <h3 class="light">Novo Produto</h3>
           <form action="php_action/create.php" method="POST">
                <div class="input-field col s12">
                    <input type="text" name="categoria" id="categoria">
                    <label for="categoria">Categoria</label>
                </div>

                <div class="input-field col s12">
                    <input type="text" name="modelo" id="modelo">
                    <label for="modelo">Modelo</label>
                </div>

                <div class="input-field col s12">
                    <input type="number" name="quantidade" id="quantidade">
                    <label for="quantidade">Quantidade</label>
                </div>

                <div class="input-field col s12">
                    <input type="number" name="valor" id="valor">
                    <label for="valor">Valor</label>
                </div>

                <button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
                <a href="index.php" class="btn green">Listar Produtos</a>
           </form>
        </div>
    </div>

    <?php
    include_once 'includes/footer.php';
    ?>