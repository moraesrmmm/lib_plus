<?php

include("../config/config.php");

$id = $_GET['id'];

$sql = "DELETE FROM reservas WHERE reserva_id = $id";
        
if ($conexao->query($sql) === TRUE) {
    header("Location: ../view/reservas.view.php");
    exit; 
} else {
    echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();
?>