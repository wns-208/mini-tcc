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
<!-- <img class="img-esquerda" src="../Pasta_Front_do_Figma_100%/login_cadastro/Pagina_Cadastro.png" alt="foto do pc"> -->


<div class="container mt-4 d-flex justify-content-end align-items-center">

<!-- <div class="row">
    <div class="teste">
        <div class="col-6"></div>
    </div>
</div> -->
    <div class="formulario">
     
   

        <div class="container">
   
           
             <form action="cadastro.html" method="POST">   
            
   


                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label class="form-label" for="nome">Nome do Usuario</label>
                            <input class="form-control" type="text" name="nome" id="nome" autocomplete="on" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label class="form-label" for="email">Email</label>
                            <input class="form-control" type="email" name="email" id="email" autocomplete="on" required">
                        </div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label class="form-label" for="senha">Senha</label>
                        <input class="form-control" type="password" name="senha" id="senha" autocomplete="on" required">
                    </div>
                    
                    <p>ja tem uma conta? <a href="login.php">entrar</a></p>
                    

                <div class="botao">
                    <div class="row">
                       
                    </div>
                </div>    
                </form>
            </div>    
                                    <a href="../pagina1_principal/index.html" class="btn btn-primary w-100"> acessar</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>