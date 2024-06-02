<?php
include("../config/config.php");

$sql = "SELECT livros.livro_id AS id, 
            livros.livro_titulo AS titulo, 
            autores.autor_nome AS autor, 
            categorias.categ_nome AS categoria, 
            livros.livro_ano_publ AS ano_publicacao 
        FROM livros 
        JOIN autores ON livros.livro_autor_id = autores.autor_id 
        JOIN categorias ON livros.livro_categ_id = categorias.categ_id";

$resultado = $conexao->query($sql);
$livros = [];
while ($dados = $resultado->fetch_assoc()) {
    $livros[] = $dados;
}

$conexao->close();
?>