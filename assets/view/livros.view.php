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
            <span class="text-dark h3">Livros</span>
            <hr>
            <a href="novo_livro.view.php" class="btn btn-dark mb-4 btn-primary">Novo Livro</a>
            <table class="table table-hover">
                <thead class="thead-custom">
                    <th>Código</th>
                    <th>Titulo</th>
                    <th>Autor</th>
                    <th>Categoria</th>
                    <th>Ano de publicação</th>
                    <th></th>
                </thead>
                <tbody>
                    <?php include("../php/livros.php"); ?>
                        <?php foreach ($livros as $livro): ?>
                            <tr>
                                <td><?php echo $livro['id']; ?></td>
                                <td><?php echo $livro['titulo']; ?></td>
                                <td><?php echo $livro['autor']; ?></td>
                                <td><?php echo $livro['categoria']; ?></td>
                                <td><?php echo $livro['ano_publicacao']; ?></td>
                                <td>
                                    <div class="d-flex justify-content-end">
                                        <a href='alterar_livro.view.php?id=<?php echo $livro["id"]; ?>' style='text-decoration:none'>⚙️</a>
                                        <a href='../php/deleta_livro.php?id=<?php echo $livro["id"]; ?>' style='text-decoration:none; color:black;'>✖️</a>   
                                    </div>
                                </td>
                            </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <a href=""></a>
        <script src="../bootstrap/js/bootstrap.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
