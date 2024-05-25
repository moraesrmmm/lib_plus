<?php

include("../config/config.php");

$id = $_GET['id'];

$sql = "DELETE FROM categorias WHERE categ_id = $id";
        


if ($conexao->query($sql) === TRUE) {
    header("Location: ../view/categorias.view.php");
    exit; 
} else {
    echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();
?>
