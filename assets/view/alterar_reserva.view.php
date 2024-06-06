<?php 
include("../config/session.php");
include("../config/config.php");
$id = $_GET['id'];
$sql = "SELECT * FROM reservas WHERE reserva_id=$id";
$rs = $conexao->query($sql);
$dados = $rs->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Alterar Reserva</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="container jumbotron mt-5">
        <h1>Alterar Reserva</h1>
        <form action="../php/salvar_reserva.php" method="POST">
            <div class="form-group">
                <label for="livro">Livro Reservado:</label>
                <select class="form-control" id="livro" name="livro_id">
                <?php
                    include ('../php/obter_dados.php');
                    $livros = obterLivros();
                    if ($livros->num_rows > 0) {
                        while ($row = $livros->fetch_assoc()) {
                            echo "<option value='" . $row['livro_id'] . "' $selected>" . $row['livro_titulo'] . "</option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="usuario">Quem Reservou?</label>
                <select class="form-control" id="usuario" name="usuario_id">
                    <?php
                    $usuarios = obterUsuarios();
                    if ($usuarios->num_rows > 0) {
                        while ($row = $usuarios->fetch_assoc()) {
                            echo "<option value='" . $row['user_id'] . "' $selected>" . $row['user_nome'] . "</option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="data_emprestimo">Data da Reserva:</label>
                <input type="date" class="form-control" id="data_emprestimo" name="data_emprestimo">
            </div>
            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        </form>
    </div>
</body>
</html>
