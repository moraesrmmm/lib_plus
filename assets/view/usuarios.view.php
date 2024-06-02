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
        <span class="text-dark h3">Usuários</span>
        <hr>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Senha</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php include("../php/usuarios.php"); ?>
                <?php foreach ($usuarios as $usuario): ?>
                    <tr>
                        <td><?php echo $usuario['user_id']; ?></td>
                        <td><?php echo $usuario['user_nome'];?></td>
                        <td><?php echo $usuario['user_email'];?></td>
                        <td><?php echo $usuario['user_senha'];?></td>
                        <td>
                            <div class="d-flex justify-content-end">
                                <a href='alterar_usuarios.view.php?id=<?php echo $usuario["user_id"]; ?>' class="me-2" style='text-decoration:none'>⚙️</a>
                                <a href='../php/deleta_usuario.php?id=<?php echo $usuario["user_id"]; ?>' style='text-decoration:none; color:black;'>✖️</a>
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
