
<?php
include("../config/session.php");
include("../config/config.php");
$id    = $_GET['id'];
$sql   = "SELECT * FROM emprestimos WHERE empres_id=$id";
$rs    = $conexao->query($sql);
$dados = $rs->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Alterar Empréstimo</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="container jumbotron mt-5">
        <h1>Alterar Empréstimo</h1>
        <form action="../php/alterar_emprestimo.php" method="POST">
        <input type="text" class="d-none" name="id" value="<?php echo $id ?>">
            <div class="form-group">
                <label for="livro">Livro Emprestado:</label>
                <select class="form-control" id="livro" name="livro_id">
                    <?php
                    include ('../php/obter_dados.php');
                    $livros = obterLivros();
                    if ($livros->num_rows > 0) {
                        while ($row = $livros->fetch_assoc()) {
                            $selected = ($row['livro_id'] == $dados['empres_livro_id']) ? 'selected' : ''; 
                            echo "<option value='" . $row['livro_id'] . "' $selected>" . $row['livro_titulo'] . "</option>";
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
                            $selected = ($row['user_id'] == $dados['empres_user_id']) ? 'selected' : ''; 
                            echo "<option value='" . $row['user_id'] . "' $selected>" . $row['user_nome'] . "</option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="data_emprestimo">Data do Empréstimo:</label>
                <input type="date" class="form-control" id="data_emprestimo" name="data_emprestimo" value="<?php echo $dados['empresdata_emprestimo']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar Empréstimo</button>
        </form>
    </div>
</body>
</html>
