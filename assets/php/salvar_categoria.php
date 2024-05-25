<?php
include("../config/config.php");

$nome = $_POST['nome'];

$sql = "INSERT INTO categorias (categ_nome)
        VALUES ('$nome')";


if ($conexao->query($sql) === TRUE) {
    header("Location: ../view/categorias.view.php");
    exit; 
} else {
    echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();
?>
