<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id'])) {
    die("Você não pode acessar está pagina porque não está logado. <p><a href=\"index.php\">Clique aqui para logar</a></p>");
}

?>