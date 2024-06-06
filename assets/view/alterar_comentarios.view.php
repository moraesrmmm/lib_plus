<?php 
include("../config/session.php");
include("../config/config.php");
$id = $_GET['id'];
$sql = "SELECT * FROM comentarios WHERE comentario_id=$id";
$rs = $conexao->query($sql);
$dados = $rs->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Alterar Comentario</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="container jumbotron mt-5">
        <h1>Alterar Comentario</h1>
        <form action="../php/alterar_comentario.php" method="POST">
        <input type="text" class="d-none" name="id" value="<?php echo $id ?>">
            <div class="form-group">
                <label for="livro">Livro Comentado:</label>
                <select class="form-control" id="livro" name="livro_id">
                    <?php
                    include ('../php/obter_dados.php');
                    $livros = obterLivros();
                    if ($livros->num_rows > 0) {
                        while ($row = $livros->fetch_assoc()) {
                            $selected = ($row['livro_id'] == $dados['livro_id']) ? 'selected' : ''; 
                            echo "<option value='" . $row['livro_id'] . "' $selected>" . $row['livro_titulo'] . "</option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="usuario">Usuário</label>
                <select class="form-control" id="usuario" name="usuario_id">
                    <?php
                    $usuarios = obterUsuarios();
                    if ($usuarios->num_rows > 0) {
                        while ($row = $usuarios->fetch_assoc()) {
                            $selected = ($row['user_id'] == $dados['usuario_id']) ? 'selected' : ''; 
                            echo "<option value='" . $row['user_id'] . "' $selected>" . $row['user_nome'] . "</option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="comentario">Comentário:</label>
                <textarea class="form-control" id="comentario" name="comentario"><?php echo $dados['texto']; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        </form>
    </div>
</body>
</html>
