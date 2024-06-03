<?php

include("../config/config.php");

$id = $_GET['id'];

$sql = "DELETE FROM emprestimos WHERE empres_id = $id";
        
if ($conexao->query($sql) === TRUE) {
    header("Location: ../view/emprestimos.view.php");
    exit; 
} else {
    echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();
?>
