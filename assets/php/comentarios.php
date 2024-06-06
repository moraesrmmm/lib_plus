<?php
include("../config/config.php");

$sql = "SELECT 
            comentarios.comentario_id AS id, 
            livros.livro_titulo AS livro, 
            usuarios.user_nome AS usuario, 
            comentarios.texto AS comentario, 
            comentarios.data_comentario AS data_comentario
            FROM 
            comentarios
            JOIN 
            usuarios ON comentarios.usuario_id = usuarios.user_id 
            JOIN 
            livros ON comentarios.livro_id = livros.livro_id;
            ";

$resultado = $conexao->query($sql);
$comentarios = [];
while ($dados = $resultado->fetch_assoc()) {
    $comentarios[] = $dados;
}

$conexao->close();
?>