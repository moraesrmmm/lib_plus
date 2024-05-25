<?php
include("../config/config.php");

$sql = "SELECT categ_id AS id, categ_nome AS nome FROM categorias";
    
$resultado = $conexao->query($sql);
$categorias    = [];
while ($dados = $resultado->fetch_assoc()) {
    $categorias[] = $dados;
}

$conexao->close();
?>