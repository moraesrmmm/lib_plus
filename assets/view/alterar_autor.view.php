<?php
include("../config/config.php");
$id = $_GET['id'];
$sql = "SELECT * FROM autores WHERE autor_id=$id";
$rs = $conexao->query($sql);
$dados = $rs->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Autor</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="container jumbotron mt-5">
        <h1>Editar Autor</h1>
        <form action="../php/alterar_autor.php" method="POST">
            <input type="text" class="d-none" name="autor_id" value="<?php echo $id ?>">
            <div class="form-group">
                <label for="nome">Nome do Autor:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $dados['autor_nome']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        </form>
    </div>
</body>
</html>
