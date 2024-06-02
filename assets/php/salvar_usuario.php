<?php
include("../config/config.php");

$nome  = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO usuarios (user_nome, user_email, user_senha) VALUES ('$nome', '$email', '$senha')";

if ($conexao->query($sql) === TRUE) {
    header("Location: ../../index.php");
    exit; 
} else {
    echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();
?>
