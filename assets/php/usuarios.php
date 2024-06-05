<?php
include("../config/config.php");

$sql = "SELECT * FROM usuarios"; 

$resultado = $conexao->query($sql);
$usuarios  = [];
while ($dados = $resultado->fetch_assoc()) {
    $usuarios[] = $dados;
}

$conexao->close();
?>