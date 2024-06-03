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
            <span class="text-dark h3">Empréstimos</span>
            <hr>
            <a href="novo_emprestimo.view.php" class="btn btn-dark mb-4 btn-primary">Novo Empréstimo</a>
            <table class="table table-hover">
                <thead class="thead-custom">
                    <th>Código</th>
                    <th>Livro</th>
                    <th>Usuário</th>
                    <th>Data de Empréstimo</th>
                    <th>Data de Devolução</th>
                    <th>Status</th>
                    <th></th>
                </thead>
                <tbody>
                    <?php include("../php/emprestimos.php"); ?>
                        <?php foreach ($emprestimos as $emprestimo): 
                            // Formatando as datas para ficar mais bonito visualmente
                            $dataEmprestimo = $emprestimo['data_emprestimo'];
                            $dataDevolucao = $emprestimo['data_devolucao'];

                            $dateEmprestimo = new DateTime($dataEmprestimo);
                            $dateDevolucao = new DateTime($dataDevolucao);

                            $data_emprestimo_formatada = $dateEmprestimo->format('d-m-Y');
                            $data_devolucao_formatada = $dateDevolucao->format('d-m-Y');
                        ?>
                            <tr>
                                <td><?php echo $emprestimo['id']; ?></td>
                                <td><?php echo $emprestimo['livro']; ?></td>
                                <td><?php echo $emprestimo['usuario']; ?></td>
                                <td><?php echo $data_emprestimo_formatada; ?></td>
                                <td><?php echo $emprestimo['status'] == 'devolvido' ? $data_devolucao_formatada : ''; ?></td>
                                <td><?php echo $emprestimo['status']; ?></td>
                                <td>
                                    <div class="d-flex justify-content-end">
                                        <a href='../php/mudar_status.php?id=<?php echo $emprestimo["id"]; ?>' style='text-decoration:none'>📌</a>
                                        <a href='alterar_emprestimo.view.php?id=<?php echo $emprestimo["id"]; ?>' style='text-decoration:none'>⚙️</a>
                                        <a href='../php/deletar_emprestimo.php?id=<?php echo $emprestimo["id"]; ?>' style='text-decoration:none; color:black;'>✖️</a>   
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
