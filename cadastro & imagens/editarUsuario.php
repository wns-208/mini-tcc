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
    <title>Editar informações</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

<div class="container mt-4">
<div claas="card shadow-sm p-4">
 <h3 class="mb-4">Editar informações</h3>   

<form action="editarUsuario.php" method="POST">
    <div class="row">
    <div class="col-md-6 mb-3">
   <label class="form-label" for="usuario_nome">Nome do Usuario</label>
   <input class="form-control" type="text" name="usuario_nome" id="usuario_nome" autocomplete="off" required>
   </div>
   </div>

   <div class="row">
    <div class="col-md-6 mb-3">
   <label class="form-label" for="usuario_email">E-mail</label>
   <input class="form-control" type="usuario_email" name="usuario_email" id="usuario_email" autocomplete="off" required>
   </div>
   </div>

   <div class="col-md-6 mb-3">
   <label class="form-label" for="usuario_senha">Senha</label>
   <input class="form-control" type="password" name="usuario_senha" id="usuario_senha" autocomplete="off" required>
    </div>
    </div>

   <button class="btn btn-primary w-100" type="submit">Editar</button>
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

$_SESSION["id"] = $ultimo_id;
?>