<?php

include("../config/config.php");

$id = $_GET['id'];

$sql = "DELETE FROM comentarios WHERE comentario_id = $id";
        
if ($conexao->query($sql) === TRUE) {
    header("Location: ../view/comentarios.view.php");
    exit; 
} else {
    echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();
?>
