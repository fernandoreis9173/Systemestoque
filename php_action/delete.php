<?php

session_start();

//conexao
require_once 'db_connect.php';

if(isset($_POST['btn-deletar'])):
   

    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "DELETE FROM estoque WHERE id = '$id'";

        if(mysqli_query($connect, $sql)):
            $_SESSION['mensagem'] = "Produto Vendido Com Sucesso!";
              header('Location: ../index.php');
        else:
            $_SESSION['mensagem'] = "Erro ao Deletar";
            header('Location: .../index.php');
        endif;
endif;
