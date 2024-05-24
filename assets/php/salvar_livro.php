<?php

include("../config/config.php");

$titulo         = $_POST['titulo'];
$autor_id       = @$_POST['autor_id'];
$categoria_id   = @$_POST['categoria_id'];
$ano_publicacao = $_POST['ano_publicacao'];

$sql = "INSERT INTO livros (livro_titulo, livro_ano_publ)
        VALUES ('$titulo',$ano_publicacao)";


if ($conexao->query($sql) === TRUE) {
    header("Location: ../view/livros.view.php");
    exit; 
} else {
    echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();
?>
