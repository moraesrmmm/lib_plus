<?php include("../config/session.php") ?>
<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Novo Empréstimo</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="container jumbotron mt-5">
        <h1>Cadastrar Novo Empréstimo</h1>
        <form action="../php/salvar_emprestimo.php" method="POST">
            <div class="form-group">
                <label for="livro">Livro Emprestado:</label>
                <select class="form-control" id="livro" name="livro_id">
                    <?php
                    include ('../php/obter_dados.php');
                    $livros = obterLivros();
                    if ($livros->num_rows > 0) {
                        while ($row = $livros->fetch_assoc()) {
                            echo "<option value='" . $row['livro_id'] . "'>" . $row['livro_titulo'] . "</option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="usuario">Quem emprestou?</label>
                <select class="form-control" id="usuario" name="usuario_id">
                    <?php
                    $usuarios = obterUsuarios();
                    if ($usuarios->num_rows > 0) {
                        while ($row = $usuarios->fetch_assoc()) {
                            echo "<option value='" . $row['user_id'] . "'>" . $row['user_nome'] . "</option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="data_emprestimo">Data do Empréstimo:</label>
                <input type="date" class="form-control" id="data_emprestimo" name="data_emprestimo">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar Empréstimo</button>
        </form>
    </div>
</body>
</html>
