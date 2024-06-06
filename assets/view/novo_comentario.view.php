<?php include("../config/session.php") ?>
<!DOCTYPE html>
<html>
<head>
    <title>Novo Comentario</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="container jumbotron mt-5">
        <h1>Comentário</h1>
        <form action="../php/salvar_comentario.php" method="POST">
            <div>
                <div class="form-group">
                    <label for="livro">Livro:</label>
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
                    <label for="usuario">Usuário:</label>
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
                    <label for="comentario">Comentário:</label>
                    <textarea class="form-control" id="comentario" name="comentario_texto"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Salvar Comentário</button>
        </form>
    </div>
</body>
</html>
