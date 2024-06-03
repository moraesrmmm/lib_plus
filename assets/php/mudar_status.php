<?php
include("../config/config.php");

date_default_timezone_set('America/Sao_Paulo');
$id = $_GET['id'];
$data = date('Y-m-d H:i:s');

$sql = "UPDATE emprestimos SET empres_status = 'devolvido', data_devolucao = '$data' WHERE empres_id = $id"; 

if ($conexao->query($sql) === TRUE) {
    header("Location: ../view/emprestimos.view.php");
    exit; 
} else {
    echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();
?>