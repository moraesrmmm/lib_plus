<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Novo Livro</title>
    <?php include("includes/includes.php") ?>
</head>
<body>
    <div class="container jumbotron mt-5">
        <h1>Cadastrar Novo Livro</h1>
        <form action="../php/salvar_livro.php" method="post">
            <div class="form-group">
                <label for="titulo">Título do Livro:</label>
                <input type="text" class="form-control" id="titulo" name="titulo">
            </div>

            <div class="form-group">
                <label for="autor">Autor:</label>
                <select class="form-control" id="autor" name="autor_id">
                    <?php
                    include ('../php/obter_dados.php');
                    $autores = obterAutores();
                    if ($autores->num_rows > 0) {
                        while ($row = $autores->fetch_assoc()) {
                            echo "<option value='" . $row['id'] . "'>" . $row['nome'] . "</option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="categoria">Categoria:</label>
                <select class="form-control" id="categoria" name="categoria_id">
                    <?php
                    $categorias = obterCategorias();
                    if ($categorias->num_rows > 0) {
                        while ($row = $categorias->fetch_assoc()) {
                            echo "<option value='" . $row['id'] . "'>" . $row['nome'] . "</option>";
                        }
                    }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="ano">Ano de Publicação:</label>
                <input type="number" class="form-control" id="ano" name="ano_publicacao">
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar Livro</button>
        </form>
    </div>
</body>
</html>
