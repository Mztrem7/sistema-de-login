<?php

include('conexao.php');

if (isset($_POST['email']) && $_POST['senha'])

    if (strlen($_POST['email']) == 0){

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
            echo  "<div class=\"alert\"><p id=\"invalid\">Email ou senha <strong>inválidos</strong></p></div>;";
        }

    }


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de login</title>
    <link rel="stylesheet" href="styleIndex.php">
</head>
<body>
    <div class="conteiner">

        <div class="conteiner-login">
            <h1>Login</h1>

            <form action="" method="POST">
                <p>
                    <label for="email">
                        <input type="email" name="email" required>
                    </label>
                </p>
                <p>
                    <label for="senha">
                        <input type="password" name="senha" required> 
                    </label>
                </p>
                <p>
                    <label for="email">
                        <button type="submit">Entrar</button>
                    </label>
                </p>
            </form>

        </div>

    </div>
</body>
</html>