<?php

include("../config/config.php");

date_default_timezone_set('America/Sao_Paulo');

$livro_id        = $_POST['livro_id'];
$usuario_id      = $_POST['usuario_id'];
$comentario      = $_POST['comentario_texto'];
$data = date('Y-m-d H:i:s');

$data_comentario = Date('y-m-d');

$sql = "INSERT INTO comentarios (livro_id, usuario_id, texto, data_comentario) VALUES ($livro_id, $usuario_id, '$comentario', '$data')";

if ($conexao->query($sql) === TRUE) {
    header("Location: ../view/comentarios.view.php");
    exit; 
} else {
    echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();
?>
