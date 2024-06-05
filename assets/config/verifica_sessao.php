<?php
// Se a sessão existir(existir um usuario logado) não precisa logar novamente
session_start();

if (isset($_SESSION['loggedin']) || isset($_SESSION['loggedin']) == true) {
    header('Location: assets/view/livros.view.php');
    exit;
}
?>