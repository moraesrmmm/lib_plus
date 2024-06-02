<?php include("../config/session.php") ?>
<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Nova Categoria</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="container jumbotron mt-5">
        <h1>Cadastrar Nova Categoria</h1>
        <form action="../php/salvar_categoria.php" method="POST">
            <div class="form-group">
                <label for="titulo">Nome da Categoria:</label>
                <input type="text" class="form-control" id="nome" name="nome">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar Categoria</button>
        </form>
    </div>
</body>
</html>
