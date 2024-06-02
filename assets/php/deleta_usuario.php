<?php

include("../config/config.php");

$id = $_GET['id'];

$sql = "DELETE FROM usuarios WHERE user_id = $id";
        
if ($conexao->query($sql) === TRUE) {
    header("Location: ../view/usuarios.view.php");
    exit; 
} else {
    echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();
?>
