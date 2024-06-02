<?php include("../config/session.php") ?>
<?php
include("../config/config.php");
$id = $_GET['id'];
$sql = "SELECT * FROM categorias WHERE categ_id=$id";
$rs = $conexao->query($sql);
$dados = $rs->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Categoria</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="container jumbotron mt-5">
        <h1>Editar Categoria</h1>
        <form action="../php/alterar_categoria.php" method="POST">
            <input type="text" class="d-none" name="categ_id" value="<?php echo $id ?>">
            <div class="form-group">
                <label for="nome">Nome da Categoria:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $dados['categ_nome']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        </form>
    </div>
</body>
</html>
