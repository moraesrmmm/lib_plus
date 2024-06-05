<?php session_start(); 

if (isset($_SESSION['emailExiste']) && $_SESSION['emailExiste']) {
    $paddingClasse = "p-2";
    $mensagem      = "Email já cadastrado, tente se cadastrar por outro";
} else {
    $paddingClasse = "";
    $mensagem      = "";
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Sistema de Biblioteca</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="shortcut icon" href="assets/img/livro_icon.png" type="image/x-icon">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: white;
            height: 100vh;
        }
        #cadastro .container #cadastro-row #cadastro-column #cadastro-box {
            margin-top: 70px;
            max-width: 600px;
            border: 1px solid #9C9C9C;
            background-color: #EAEAEA;
        }
        #cadastro .container #cadastro-row #cadastro-column #cadastro-box #cadastro-form {
            padding: 20px;
        }
        #cadastro .container #cadastro-row #cadastro-column #cadastro-box #cadastro-form #register-link {
            margin-top: -85px;
        }
        .btn-primary {
            background-color: rgb(189, 93, 56) !important;
            color: white;
            border: 2px solid rgb(189, 93, 56) !important;
            padding: 10px 20px !important;
            cursor: pointer !important;
            transition: border-color 0.3s, background-color 0.3s !important;
        }
        .btn-primary:hover {
            color: #fff !important;
            background-color: rgb(189, 93, 56) !important;
            border-color: white !important; /* destaque com a cor branca */
        }
        .text-info{
            color: rgb(189, 93, 56) !important;
        }
    </style>
</head>
<body>
    <div id="cadastro">
        <h3 class="text-center text-white pt-5">LIB PLUS</h3>
        <div class="container">
            <div id="cadastro-row" class="row justify-content-center align-items-center">
                <div id="cadastro-column" class="col-md-6">
                    <div id="cadastro-box" class="col-md-12">
                        <form id="cadastro-form" class="form" action="../php/salvar_usuario.php" method="post">
                            <h3 class="text-center text-info">Cadastrar Usuário</h3>
                            <div class="form-group">
                                <label for="nome" class="text-info">Nome:</label><br>
                                <input type="text" name="nome" id="nome" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email" class="text-info">Email:</label><br>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="senha" class="text-info">Senha:</label><br>
                                <input type="text" name="senha" id="senha" class="form-control">
                            </div>
                            <div class="form-group row" style="margin-left: 1px;">
                                <input type="submit" name="submit" class="btn btn-primary btn-md " value="Cadastrar">
                            </div>
                            <div class="bg-danger mt-0 mb-2 <?php echo $paddingClasse; ?>">
                                <?php
                                    echo $mensagem;
                                ?>
                            </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
