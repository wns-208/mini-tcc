<?php
<<<<<<< HEAD
include "../Alberto_Lucas_Willian/back_end/conexao.php";
session_start();
=======

>>>>>>> 3124199ba670b447e3f9d387b50b98c63830140c
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

<<<<<<< HEAD
    <img src="../Pasta_Front_do_Figma_100%/login_cadastro/Pagina_Cadastro.png" class="rounded float-start" alt="...">
=======
<!-- <img class="img-esquerda" src="../Pasta_Front_do_Figma_100%/login_cadastro/Pagina_Cadastro.png" alt="foto do pc"> -->
>>>>>>> 3124199ba670b447e3f9d387b50b98c63830140c



<div class="container mt-4 d-flex justify-content-end align-items-center">
    <div class="formulario">
        <div class="container">
   
<<<<<<< HEAD
             <form action="cadastro.php" method="POST">   
=======
            <form action="cadastro.html" method="POST">
                
            
   


>>>>>>> 3124199ba670b447e3f9d387b50b98c63830140c
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

<<<<<<< HEAD
                </div>    
                </form>
            </div>    
=======
                <div class="botao">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            
                                <a href="../pagina1_principal/index.html" class="btn btn-primary w-100"> Ir para Outra Página</a>


                            
                        </div>
                    </div>
                </div>    
                </form>
            </div>    
    
>>>>>>> 3124199ba670b447e3f9d387b50b98c63830140c
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>

<?php
$usuario_nome = isset($_POST['usuario_nome']) ? $_POST['usuario_nome'] : exit();
$usuario_email = isset($_POST['usuario_email']) ? $_POST['usuario_email'] : exit();
$usuario_senha = isset($_POST['usuario_senha']) ? $_POST['usuario_senha'] : exit();

$insert_usuario = $connection->prepare("INSERT INTO usuario (usuario_nome, usuario_email, usuario_senha) VALUES (?, ?, ?)");
$insert_usuario->bind_param("sss", $usuario_nome, $usuario_email, $usuario_senha);


if ($insert_usuario->execute()) {
    $ultimo_id = mysqli_insert_id($connection);
    $_SESSION["id"] = $ultimo_id;
    header("location: ../pagina1_principal/index.html");
} else {
    echo "Erro: " . $insert_usuario->error;
}

$_SESSION["id"] = $ultimo_id;
?>