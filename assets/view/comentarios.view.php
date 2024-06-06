<?php
include("../config/session.php");
include("../config/config.php")
?>

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
            <span class="text-dark h3">Comentários</span>
            <hr>
            <a href="novo_comentario.view.php" class="btn btn-dark mb-4 btn-primary">Novo Comentario</a>
            <table class="table table-hover">
            <thead class="thead-custom">
                <th>Código</th>
                <th>Livro</th>
                <th>Usuário</th>
                <th>Comentário</th>
                <th>data</th>
                <th></th>
            </thead>
            <tbody>
                <?php include("../php/comentarios.php"); ?>
                    <?php foreach ($comentarios as $comentario): 
                        // Formatando as datas para ficar mais bonito visualmente
                        $dataComentario = $comentario['data_comentario'];

                        $dateComentario = new DateTime($dataComentario);

                        $data_comentario_formatada = $dateComentario->format('d-m-Y');
                    ?>
                        <tr>
                            <td><?php echo $comentario['id']; ?></td>
                            <td><?php echo $comentario['livro']; ?></td>
                            <td><?php echo $comentario['usuario']; ?></td>
                            <td><?php echo $comentario['comentario']; ?></td>
                            <td><?php echo $data_comentario_formatada; ?></td>
                            <td>
                                <div class="d-flex justify-content-end">
                                    <a href='alterar_comentarios.view.php?id=<?php echo $comentario["id"]; ?>' style='text-decoration:none'>⚙️</a>
                                    <a href='../php/deleta_comentario.php?id=<?php echo $comentario["id"]; ?>' style='text-decoration:none; color:black;'>✖️</a>   
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
