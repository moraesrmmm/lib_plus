<?php

include("../config/config.php");

$id    = $_POST['id']; 
$nome  = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "UPDATE usuarios SET user_nome = '$nome', user_email = '$email', user_senha = '$senha' WHERE user_id = $id"; 

if ($conexao->query($sql) === TRUE) {
    header("Location: ../view/usuarios.view.php");
    exit; 
} else {
    echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();
?>
