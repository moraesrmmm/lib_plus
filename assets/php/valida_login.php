<?php
session_start();
include("../config/config.php");

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE user_email = '$email' AND user_senha = '$senha'";

$aDados = [];

$resultado = $conexao->query($sql);

while ($dados = $resultado->fetch_assoc()) {
    $aDados[] = $dados;
}

if ($aDados) {
    $_SESSION['loggedin'] = true;
    $_SESSION['user_id'] = $user['user_id'];
    header("Location: ../view/livros.view.php");
} else {
    header("Location: ../../index.php");
    exit;
}

?>

