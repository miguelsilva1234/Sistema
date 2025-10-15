<?php
    session_start();



    if( (!isset($_SESSION['id'])) and (!isset($_SESSION['nome']))
    and (!isset($_SESSION['email'])) ){

        unset(
            $_SESSION['id'],
            $_SESSION['nome'],   
            $_SESSION['email'], 
        );
        header('Location: index.php');
    }


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAINEL DE CONTROLE</title>
</head>
<body>
    <h1> Bem vindo </h1>
    <p>Pagina restrita</p>



    <button>
        <a href="logout.php">sair</a>
    </button>


</body>
</html>