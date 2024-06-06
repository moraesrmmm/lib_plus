<?php

include("../config/config.php");

$livro_id        = $_POST['livro_id'];
$usuario_id      = $_POST['usuario_id'];
$data_reserva = $_POST['data_reserva'];

$sql = "INSERT INTO reservas (livro_id, usuario_id, data_reserva) VALUES ($livro_id, $usuario_id, '$data_reserva')";

if ($conexao->query($sql) === TRUE) {
    header("Location: ../view/reservas.view.php");
    exit; 
} else {
    echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();
?>
