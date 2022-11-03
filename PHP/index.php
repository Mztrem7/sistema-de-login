<?php

include('conexao.php');

if (isset($_POST['email']) && $_POST['senha'])

    if (strlen($_POST['email']) == 0){
        echo "preencha o email";
    }else if (strlen($_POST['senha']) == 0){
        echo "preencha sua senha";
    }else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: ".$mysqli->error . "" .$mysqli->errno);

        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1){

            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSIO)){
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];


            header("Location: painel.php");

        } else {
            echo  "email ou senha inválido: ".$mysqli->error . $mysqli->errno;
        }

    }


