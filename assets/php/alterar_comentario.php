<?php

include("../config/config.php");

$comentario_id       = $_POST['id'];
$livro_id        = $_POST['livro_id']; 
$usuario_id      = $_POST['usuario_id'];
$comentario      = $_POST['comentario'];

$sql = "UPDATE comentarios 
        SET 
            livro_id        = $livro_id, 
            usuario_id      = $usuario_id, 
            texto           = '$comentario'
        WHERE
            comentario_id = $comentario_id";


if ($conexao->query($sql) === TRUE) {
    header("Location: ../view/comentarios.view.php");
    exit; 
} else {
    echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();
?>
