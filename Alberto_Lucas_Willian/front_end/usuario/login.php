<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
</head>
<body>



<div class="container mt-4 d-flex justify-content-end align-items-center">
    <div class="formulario">
         
        <div class="container">
            <form action="cadastro.php" method="POST">
                <!-- <div class="row">
                    <div class="col-md-12 mb-3">
                        <label class="form-label" for="nome">Nome do Usuario</label>
                        <input class="form-control" type="text" name="nome" id="nome" autocomplete="on" required>
                    </div>
                </div> -->

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label class="form-label" for="email">Email</label>
                        <input class="form-control" type="email" name="email" id="email autocomplete="on" required">
                    </div>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label" for="senha">Senha</label>
                    <input class="form-control" type="password" name="senha" id="senha autocomplete="on" required">
                </div>
                
                <p>não tem uma conta? <a href="cadastro.php">cadastrar</a></p>
                

            <div class="botao">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <button class="btn btn-primary w-100" type="submit">entrar</button>
                    </div>
                </div>
            </div>    
            </form>
        </div>    
    
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>