<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Novo Autor</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="container jumbotron mt-5">
        <h1>Cadastrar Novo Autor</h1>
        <form action="../php/salvar_autor.php" method="POST">
            <div class="form-group">
                <label for="titulo">Nome do Autor:</label>
                <input type="text" class="form-control" id="nome" name="nome">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar Autor</button>
        </form>
    </div>
</body>
</html>
