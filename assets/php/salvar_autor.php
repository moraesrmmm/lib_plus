<?php
include("../config/config.php");

$nome = $_POST['nome'];

$sql = "INSERT INTO autores (autor_nome)
        VALUES ('$nome')";


if ($conexao->query($sql) === TRUE) {
    header("Location: ../view/autores.view.php");
    exit; 
} else {
    echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();
?>
