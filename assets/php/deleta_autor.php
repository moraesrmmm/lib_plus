<?php

include("../config/config.php");

$id = $_GET['id'];

$sql = "DELETE FROM autores WHERE autor_id = $id";
        


if ($conexao->query($sql) === TRUE) {
    header("Location: ../view/autores.view.php");
    exit; 
} else {
    echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();
?>
