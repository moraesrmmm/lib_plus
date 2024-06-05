<?php
include("../config/config.php");

$sql = "SELECT autor_id AS id, autor_nome AS nome FROM autores";
    
$resultado = $conexao->query($sql);
$autores   = [];
while ($dados = $resultado->fetch_assoc()) {
    $autores[] = $dados;
}

$conexao->close();
?>