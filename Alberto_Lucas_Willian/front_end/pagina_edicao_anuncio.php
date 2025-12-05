<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Página principal</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- Favicon -->
     <link rel="shortcut icon" href="../front_end/Pasta_Front_do_FIgma_100%/ícone da logo do site (favicon)/pngtree-circle-technology-abstract-logo-vector-minimalist-png-image_1881155-removebg-preview.png" type="image/x-icon">

    <!-- fontes usadas -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jersey+20&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Reem+Kufi:wght@400..700&display=swap" rel="stylesheet">

    <!-- CSS do style -->
    <link rel="stylesheet" href="pagina_edicacao_anuncio.css" enctype="multipart/form-data">
  </head>
  <body>
<form action="pagina_edicao_anuncio" method="post"> 
<div class="container card-container">
<div class="row imagem_daora justify-content-center">
<div class="col-7 col-md-8 text-center justify-content-center align-items-center">
<img src="Pasta_Front_do_FIgma_100%/Página 2/674435.jpg" class="preview-img" alt="Preview">
</div>
</div>


<div class="row g-4">
<div class="col-md-6">
<label class="fw-bold">Título:</label>
<input type="text" class="form-control" placeholder="Digite o título...">
</div>

<div class="col-md-6">
<label class="fw-bold">Foto (Opicional):</label>
<input type="file" class="form-control">
</div>


<div class="col-md-6">
<label class="fw-bold">Email de quem escreveu:</label>
<input type="email" class="form-control" placeholder="email@example.com">
</div>



<select name="categoria" class="col-md-6 categoria">
                <option value="Arduino" class="form-control">Arduino</option>
                <option value="Software" class="form-control">Software</option>
                <option value="Hardware" class="form-control">Hardware</option>
                <option value="Aplicativos Mobile" class="form-control">Aplicativos Mobile</option>
</select>


<div class="col-12">
<label class="fw-bold">Conteúdo:</label>
<textarea class="form-control" rows="6" placeholder="Digite o conteúdo..."></textarea>
</div>


<div class="col-12 text-center mt-3">
<button class="btn btn-custom">Enviar</button>
</div>
</div>
</div>
</form>
</body>
</html>