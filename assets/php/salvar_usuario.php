<?php
session_start();

include("../config/config.php");
include("obter_dados.php");

$nome  = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$_SESSION['emailExiste'] = false;


if(!obterUsuariosByEmail($email)){
    $sql = "INSERT INTO usuarios (user_nome, user_email, user_senha) VALUES ('$nome', '$email', '$senha')";

    if ($conexao->query($sql) === TRUE) {
        header("Location: ../../index.php");
        exit; 
    } else {
        echo "Erro: " . $sql . "<br>" . $conexao->error;
    }

}else{
    $_SESSION['emailExiste'] = true;
    header('Location: ../view/cadastro_usuario.view.php');
}

$conexao->close();
?>
