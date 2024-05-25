<?php

include("../config/config.php");

$categ_id = $_POST['categ_id']; 
$nome     = $_POST['nome'];

$sql = "UPDATE categorias SET categ_nome = '$nome' WHERE categ_id = $categ_id"; 

if ($conexao->query($sql) === TRUE) {
    header("Location: ../view/categorias.view.php");
    exit; 
} else {
    echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();
?>
