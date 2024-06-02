<?php
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
    header("Location: ../view/livros.view.php");
} else {
    header("Location: ../../index.php");
    exit;
}

?>

