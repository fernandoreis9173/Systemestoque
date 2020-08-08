<?php
    include_once 'includes/header.php';
    ?>

    <div class="row">
        <div class="col s12 m6 push-m3">
          <h3 class="light">Sistema de Estoque</h3>
            <table class="striped">
                <thead>
                    <tr>
                        <th>Categoria:</th>
                        <th>Modelo:</th>
                        <th>Quantidades:</th>
                        <th>Valor:</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Carro</td>
                        <td>Prisma</td>
                        <td>5</td>
                        <td>15000</td>
                        <td><a href="" class="btn-floating blue"><i class="material-icons">edit</i></a></td>
                        <td><a href="" class="btn-floating green"><i class="material-icons">delete</i></a></td>
                    </tr>
                </tbody>
            </table>
            <br>
            <a href="" class="btn">Adicionar Produto</a>
        </div>
    </div>

    <?php
    include_once 'includes/footer.php';
    ?>