<?php

session_start();

//conexao
require_once 'db_connect.php';

if(isset($_POST['btn-cadastrar'])):
    $categoria = mysqli_escape_string($connect, $_POST['categoria']);
    $modelo = mysqli_escape_string($connect, $_POST['modelo']);
    $quantidade = mysqli_escape_string($connect, $_POST['quantidade']);
    $valor = mysqli_escape_string($connect, $_POST['valor']);

    $sql = "INSERT INTO estoque (categoria, modelo, quantidade, valor) VALUES 
                                ('$categoria', '$modelo', '$quantidade', '$valor')";

        if(mysqli_query($connect, $sql)):
            $_SESSION['mensagem'] = "Produto Cadastrado Com Sucesso!";
              header('Location: ../index.php');
        else:
            $_SESSION['mensagem'] = "Erro ao Cadastrar";
            header('Location: .../index.php');
        endif;
endif;
