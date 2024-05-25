<?php

include("../config/config.php");

$autor_id = $_POST['autor_id']; 
$nome     = $_POST['nome'];

$sql = "UPDATE autores SET autor_nome = '$nome' WHERE autor_id = $autor_id"; 

if ($conexao->query($sql) === TRUE) {
    header("Location: ../view/autores.view.php");
    exit; 
} else {
    echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();
?>
