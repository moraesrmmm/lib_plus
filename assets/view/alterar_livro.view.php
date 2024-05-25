<?php
    include("../config/config.php");
    $id = $_GET['id'];
    $sql = "SELECT * FROM livros WHERE livro_id=$id";
    $rs = $conexao->query($sql);
    $dados = $rs->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Livro</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="container jumbotron mt-5">
        <h1>Editar Livro</h1>
        <form action="../php/alterar_livro.php" method="POST">
            <input type="text" class="d-none" name="livro_id" value="<?php echo $id ?>">
            <div class="form-group">
                <label for="titulo">Título do Livro:</label>
                <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $dados['livro_titulo']; ?>">
            </div>

            <div class="form-group">
                <label for="autor">Autor:</label>
                <select class="form-control" id="autor" name="autor_id">
                    <?php
                    include ('../php/obter_dados.php');
                    $autores = obterAutores();
                    if ($autores->num_rows > 0) {
                        while ($row = $autores->fetch_assoc()) {
                            $selected = ($row['autor_id'] == $dados['livro_autor_id']) ? 'selected' : ''; // Verifica se o autor atual é o autor do livro
                            echo "<option value='" . $row['autor_id'] . "' $selected>" . $row['autor_nome'] . "</option>";
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
                            $selected = ($row['categ_id'] == $dados['livro_categ_id']) ? 'selected' : ''; // Verifica se a categoria atual é a categoria do livro
                            echo "<option value='" . $row['categ_id'] . "' $selected>" . $row['categ_nome'] . "</option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="ano">Ano de Publicação:</label>
                <input type="number" class="form-control" id="ano" name="ano_publicacao"  value="<?php echo $dados['livro_ano_publ']; ?>" >
            </div>
            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        </form>
    </div>
</body>
</html>
