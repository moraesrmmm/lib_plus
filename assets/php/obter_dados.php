<?php
    include '../config/config.php'; 

    function obterAutores() {
        global $conexao;
        $sql_autores    = "SELECT autor_id, autor_nome FROM autores";
        $result_autores = $conexao->query($sql_autores);
        return $result_autores;
    }

    function obterCategorias() {
        global $conexao;
        $sql_categorias    = "SELECT categ_id, categ_nome FROM categorias";
        $result_categorias = $conexao->query($sql_categorias);
        return $result_categorias;
    }

    
?>