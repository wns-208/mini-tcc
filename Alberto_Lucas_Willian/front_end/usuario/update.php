<?php
include "../Alberto_Lucas_Willian/back_end/conexao.php";
session_start();
$id_usuario = $_SESSION["id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <title>Cadastro</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
</head>
<body>

    <img src="../Pasta_Front_do_Figma_100%/login_cadastro/Pagina_Cadastro.png" class="rounded float-start" alt="...">


<div class="container mt-4 d-flex justify-content-end align-items-center">
    <div class="formulario">
        <div class="container">
   
             <form action="cadastro.php" method="POST">   
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label class="form-label" for="usuario_nome">Nome do Usuario</label>
                            <input class="form-control" type="text" name="usuario_nome" id="usuario_nome" autocomplete="off" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label class="form-label" for="usuario_email">E-mail</label>
                            <input class="form-control" type="email" name="usuario_email" id="usuario_email" autocomplete="off" required>
                        </div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label class="form-label" for="usuario_senha">Senha</label>
                        <input class="form-control" type="password" name="usuario_senha" id="usuario_senha" autocomplete="off" required>
                    </div>
                    
                    <p>Ja tem uma conta? <a href="login.html">Entrar</a></p>

                </div>    
                </form>
            </div>    
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>

<?php
$usuario_nome = isset($_POST['usuario_nome']) ? $_POST['usuario_nome'] : exit();
$usuario_email = isset($_POST['usuario_email']) ? $_POST['usuario_email'] : exit();
$usuario_senha = isset($_POST['usuario_senha']) ? $_POST['usuario_senha'] : exit();

$update = $connection->prepare("UPDATE usuario SET usuario_nome = ?, usuario_senha = ?, usuario_email = ? WHERE usuario_id = ?");
$update->bind_param("sssi", $usuario_nome, $usuario_email, $usuario_senha, $id_usuario);
if ($update->execute()) {
    header("location: menu.html");
} else {
    echo "Erro: " . $update->error;
}
?>