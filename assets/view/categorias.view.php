<?php include("../config/session.php") ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Sistema de Biblioteca</title>
    <?php include("includes/includes.php") ?>
</head>
<body>
    <?php include("includes/nav.php") ?>
    <div class="container-fluid p-4">
        <span class="text-dark h3">Categorias</span>
        <hr>
        <a href="nova_categoria.view.php" class="btn btn-dark mb-4 btn-primary">Nova Categoria</a>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php include("../php/categorias.php"); ?>
                <?php foreach ($categorias as $categoria): ?>
                    <tr>
                        <td><?php echo $categoria['id']; ?></td>
                        <td><?php echo $categoria['nome']; ?></td>
                        <td>
                            <div class="d-flex justify-content-end">
                                <a href='alterar_categoria.view.php?id=<?php echo $categoria["id"]; ?>' class="me-2" style='text-decoration:none'>⚙️</a>
                                <a href='../php/deleta_categoria.php?id=<?php echo $categoria["id"]; ?>' style='text-decoration:none; color:black;'>✖️</a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="../bootstrap/js/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
