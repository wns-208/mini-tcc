<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

<div class="container mt-4">
<div claas="card shadow-sm p-4">
 <h3 class="mb-4">cadastro</h3>   

<form action="cadastro.php" method="POST">
    <div class="row">
    <div class="col-md-6 mb-3">
   <label class="form-label" for="nome">Nome do Usuario</label>
   <input class="form-control" type="text" name="nome" id="nome">
   </div>
   </div>

   <div class="row">
    <div class="col-md-6 mb-3">
   <label class="form-label" for="email">email</label>
   <input class="form-control" type="email" name="email" id="email">
   </div>
   </div>

   <!-- <br><br> -->

   <div class="col-md-6 mb-3">
   <label class="form-label" for="senha">senha</label>
   <input class="form-control" type="password" name="senha" id="senha">
    </div>
    </div>
   <!-- <br><br> -->

   <button class="btn btn-primary w-100; type="submit">Cadastrar</button>
</form>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>