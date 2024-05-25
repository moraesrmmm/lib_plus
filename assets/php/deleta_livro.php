<?php

include("../config/config.php");

$id = $_GET['id'];

$sql = "DELETE FROM livros WHERE livro_id = $id";
        


if ($conexao->query($sql) === TRUE) {
    header("Location: ../view/livros.view.php");
    exit; 
} else {
    echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();
?>
