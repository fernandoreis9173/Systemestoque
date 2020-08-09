<?php

session_start();

//conexao
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):
    $categoria = mysqli_escape_string($connect, $_POST['categoria']);
    $modelo = mysqli_escape_string($connect, $_POST['modelo']);
    $quantidade = mysqli_escape_string($connect, $_POST['quantidade']);
    $valor = mysqli_escape_string($connect, $_POST['valor']);

    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE estoque SET categoria = '$categoria', modelo = '$modelo', quantidade = '$quantidade', valor = '$valor' WHERE id = '$id'";

        if(mysqli_query($connect, $sql)):
            $_SESSION['mensagem'] = "Produto Editado Com Sucesso!";
              header('Location: ../index.php');
        else:
            $_SESSION['mensagem'] = "Erro ao Atualizar";
            header('Location: .../index.php');
        endif;
endif;
