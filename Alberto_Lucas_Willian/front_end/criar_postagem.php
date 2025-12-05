<?php
include "../back_end/conexao.php";
session_start();
$id_usuario = $_SESSION["id"];
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Criar Postagem</title>

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
    <link rel="stylesheet" href="criar_postagem.css" enctype="multipart/form-data">
  </head>
  <body>
<form action="criar_postagem.php" method="post"> 
<div class="container card-container">
<div class="row imagem_daora justify-content-center">
<div class="col-7 col-md-8 text-center justify-content-center align-items-center">
<img src="Pasta_Front_do_FIgma_100%/Página 2/674435.jpg" class="preview-img" alt="Preview">
</div>
</div>


<div class="row g-4">
<div class="col-md-6">
<label class="fw-bold" for="postagem_titulo">Título:</label>
<input type="text" id="postagem_titulo" name="postagem_titulo" class="form-control" placeholder="Digite o título..." id="postagem_titulo" name="postagem_titulo" required autocomplete="off">
</div>

<div class="col-md-6">
<label class="fw-bold" for="postagem_imagem">Imagem (OPCIONAL):</label>
<input type="file" id="postagem_imagem" name="postagem_imagem" class="form-control">
</div>

<label class="fw-bold" for="postagem_categoria">Categoria:</label>
<select name="postagem_categoria" id="postagem_categoria" class="col-md-6 categoria" required>
                <option value="Arduino" id="Arduino" class="form-control">Arduino</option>
                <option value="Software" id="Software" class="form-control">Software</option>
                <option value="Hardware" id="Hardware" class="form-control">Hardware</option>
                <option value="Aplicativos Mobile" id="Aplicativos Mobile" class="form-control">Aplicativos Mobile</option>
</select>


<div class="col-12">
<label class="fw-bold" for="postagem_conteudo">Conteúdo:</label>
<textarea class="form-control" rows="6" id="postagem_conteudo" name="postagem_conteudo" placeholder="Digite o conteúdo..." required autocomplete="off"></textarea>
</div>


<div class="col-12 text-center mt-3">
<button class="btn btn-custom">Criar</button>
</div>
</div>
</div>
</form>

<?php 

$pasta_final = "../Alberto_Lucas_Willian/front_end/postagem/assests/postagem_imagem/";
$arquivo_selecionado = $pasta_final.basename($_FILES["postagem_imagem"]["name"]);
$arquivo_filtrado = basename($arquivo_selecionado);
$validacao = explode(".", basename($arquivo_selecionado));

$postagem_titulo = isset($_POST['postagem_titulo']) ? $_POST['postagem_titulo'] : exit();
$postagem_conteudo = isset($_POST['postagem_conteudo']) ? $_POST['postagem_conteudo'] : exit();
$postagem_categoria = isset($_POST['postagem_categoria']) ? $_POST['postagem_categoria'] : exit();

$insert_postagem = $connection->prepare("INSERT INTO postagem (postagem_titulo, postagem_conteudo, postagem_categoria, postagem_id_usuario) VALUES (?, ?, ?, ?)");
$insert_postagem->bind_param("sssi", $postagem_titulo, $postagem_conteudo, $postagem_categoria, $id_usuario);
$insert_postagem->execute();
$ultimo_id = mysqli_insert_id($connection);

    if ($validacao[1] == "jpeg") {
        if (isset($_POST["enviar"]) && $_FILES["postagem_imagem"]["error"] == UPLOAD_ERR_OK) {
            if (move_uploaded_file($_FILES["postagem_imagem"]["tmp_name"], $arquivo_selecionado)) {
                $update_imagem = $connection->prepare("UPDATE postagem SET postagem_imagem = ? WHERE postagem_id = ?");
                $update_imagem->bind_param("si", $arquivo_filtrado, $ultimo_id);
                $update_imagem->execute();
            }
            else {
                echo 'Aceitamos JPEG somente';
            }
        }
    }
?>