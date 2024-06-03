<?php
include("../config/config.php");

$sql = "SELECT 
            emprestimos.empres_id AS id, 
            livros.livro_titulo AS livro, 
            usuarios.user_nome AS usuario, 
            emprestimos.empresdata_emprestimo AS data_emprestimo, 
            emprestimos.data_devolucao AS data_devolucao,
            emprestimos.empres_status AS status 
            FROM 
            emprestimos 
            JOIN 
            usuarios ON emprestimos.empres_user_id = usuarios.user_id 
            JOIN 
            livros ON emprestimos.empres_livro_id = livros.livro_id;
            ";

$resultado = $conexao->query($sql);
$emprestimos = [];
while ($dados = $resultado->fetch_assoc()) {
    $emprestimos[] = $dados;
}

$conexao->close();
?>