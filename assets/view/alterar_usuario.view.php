<?php
include("../config/session.php"); 
include("../config/config.php");
$id    = $_GET['id'];
$sql   = "SELECT * FROM usuarios WHERE user_id=$id";
$rs    = $conexao->query($sql);
$dados = $rs->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Usuário</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="container jumbotron mt-5">
        <h1>Editar Usuário</h1>
        <form action="../php/alterar_usuario.php" method="POST">
            <input type="text" class="d-none" name="id" value="<?php echo $id ?>">
            <div class="form-group">
                <label for="nome">Nome do Usuário:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $dados['user_nome']; ?>">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" name="email" value="<?php echo $dados['user_email']; ?>">
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="text" class="form-control" id="senha" name="senha" value="<?php echo $dados['user_senha']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        </form>
    </div>
</body>
</html>
