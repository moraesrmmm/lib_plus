<?php
include '../config/config.php'; 

function obterAutores() {
    global $conexao;
    $sql_autores = "SELECT autor_id, autor_nome FROM autores";
    $result_autores = $conexao->query($sql_autores);
    return $result_autores;
}

function obterCategorias() {
    global $conexao;
    $sql_categorias = "SELECT categ_id, categ_nome FROM categorias";
    $result_categorias = $conexao->query($sql_categorias);
    return $result_categorias;
}

function obterLivros(){
    global $conexao;
    $sql_livros = "SELECT livro_id, livro_titulo FROM livros";
    $result_livros = $conexao->query($sql_livros);
    return $result_livros;
}

function obterUsuarios(){
    global $conexao;
    $sql_usuarios = "SELECT user_id, user_nome, user_email FROM usuarios";
    $result_usuarios = $conexao->query($sql_usuarios);
    return $result_usuarios;
}

function obterUsuariosByEmail($email) {
    global $conexao;
    
    $stmt = $conexao->prepare("SELECT * FROM usuarios WHERE user_email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result_usuarios = $stmt->get_result();
    if ($result_usuarios->num_rows > 0) {
        return true; 
    } else {
        return false;
    }
}

?>