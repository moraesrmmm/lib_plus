<?php
session_start();

include("../config/config.php");
include("obter_dados.php");

$nome  = trim($_POST['nome']);
$email = trim($_POST['email']);
$senha = trim($_POST['senha']);
$_SESSION['emailExiste']  = false;
$_SESSION['camposVazios'] = false;

if (empty($nome) || empty($email) || empty($senha)) {
    $_SESSION['camposVazios'] = true;
    header('Location: ../view/cadastro_usuario.view.php');
    exit;
}


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
