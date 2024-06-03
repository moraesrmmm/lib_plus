<?php

include("../config/config.php");

$empres_id       = $_POST['id'];
$livro_id        = $_POST['livro_id']; 
$usuario_id      = $_POST['usuario_id'];
$data_emprestimo = $_POST['data_emprestimo'];

$sql = "UPDATE emprestimos 
        SET 
            empres_livro_id        = $livro_id, 
            empres_user_id         = $usuario_id, 
            empresdata_emprestimo  = '$data_emprestimo'
        WHERE
            empres_id = $empres_id";


if ($conexao->query($sql) === TRUE) {
    header("Location: ../view/emprestimos.view.php");
    exit; 
} else {
    echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();
?>
