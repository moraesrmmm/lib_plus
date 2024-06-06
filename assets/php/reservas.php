<?php
include("../config/config.php");

$sql = "SELECT 
            reservas.reserva_id AS id, 
            livros.livro_titulo AS livro, 
            usuarios.user_nome AS usuario, 
            reservas.data_reserva AS data_reserva
            FROM 
            reservas
            JOIN 
            usuarios ON reservas.usuario_id = usuarios.user_id 
            JOIN 
            livros ON reservas.livro_id = livros.livro_id;
            ";

$resultado = $conexao->query($sql);
$reservas = [];
while ($dados = $resultado->fetch_assoc()) {
    $reservas[] = $dados;
}

$conexao->close();
?>