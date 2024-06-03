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
        <span class="text-dark h3">Autores</span>
        <hr>
        <a href="novo_autor.view.php" class="btn btn-dark mb-4 btn-primary">Novo Autor</a>

        <table class="table table-hover">
            <thead class="thead-custom">
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php include("../php/autores.php"); ?>
                <?php foreach ($autores as $autor): ?>
                    <tr>
                        <td><?php echo $autor['id']; ?></td>
                        <td><?php echo $autor['nome']; ?></td>
                        <td>
                            <div class="d-flex justify-content-end">
                                <a href='alterar_autor.view.php?id=<?php echo $autor["id"]; ?>' class="me-2" style='text-decoration:none'>⚙️</a>
                                <a href='../php/deleta_autor.php?id=<?php echo $autor["id"]; ?>' style='text-decoration:none; color:black;'>✖️</a>
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
