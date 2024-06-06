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
            <span class="text-dark h3">Reservas</span>
            <hr>
            <a href="nova_reserva.view.php" class="btn btn-dark mb-4 btn-primary">Nova Reserva</a>
            <table class="table table-hover">
                <thead class="thead-custom">
                    <th>Código</th>
                    <th>Livro</th>
                    <th>Usuário</th>
                    <th>Data da Reserva</th>
                    <th></th>
                </thead>
                <tbody>
                    <?php include("../php/reservas.php"); ?>
                        <?php foreach ($reservas as $reserva): 
                            // Formatando as datas para ficar mais bonito visualmente
                            $dataReserva = $reserva['data_reserva'];

                            $dateReserva = new DateTime($dataReserva);

                            $data_reserva_formatada = $dateReserva->format('d-m-Y');
                        ?>
                            <tr>
                                <td><?php echo $reserva['id']; ?></td>
                                <td><?php echo $reserva['livro']; ?></td>
                                <td><?php echo $reserva['usuario']; ?></td>
                                <td><?php echo $data_reserva_formatada; ?></td>
                                <td>
                                    <div class="d-flex justify-content-end">
                                        <a href='alterar_reserva.view.php?id=<?php echo $reserva["id"]; ?>' style='text-decoration:none'>⚙️</a>
                                        <a href='../php/deleta_reserva.php?id=<?php echo $reserva["id"]; ?>' style='text-decoration:none; color:black;'>✖️</a>   
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
