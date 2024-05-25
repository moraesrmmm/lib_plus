<?php

include("../config/config.php");

$livro_id       = $_POST['livro_id']; 
$titulo         = $_POST['titulo'];
$autor_id       = $_POST['autor_id'];
$categoria_id   = $_POST['categoria_id'];
$ano_publicacao = $_POST['ano_publicacao'];

$sql = "UPDATE livros 
        SET 
            livro_titulo = '$titulo', 
            livro_autor_id = $autor_id, 
            livro_categ_id = $categoria_id, 
            livro_ano_publ = $ano_publicacao
        WHERE
            livro_id = $livro_id";


if ($conexao->query($sql) === TRUE) {
    header("Location: ../view/livros.view.php");
    exit; 
} else {
    echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();
?>
