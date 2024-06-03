<?php

include("../config/config.php");

$livro_id        = $_POST['livro_id'];
$usuario_id      = $_POST['usuario_id'];
$data_emprestimo = $_POST['data_emprestimo'];

$sql = "INSERT INTO emprestimos (empres_livro_id, empres_user_id, empresdata_emprestimo, empres_status) VALUES ($livro_id, $usuario_id, '$data_emprestimo', 'emprestado')";

if ($conexao->query($sql) === TRUE) {
    header("Location: ../view/emprestimos.view.php");
    exit; 
} else {
    echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();
?>
