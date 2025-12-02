<?php
include "../Alberto_Lucas_Willian/back_end/conexao.php";
session_start();
$id_usuario = $_SESSION["id"];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Postagem</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

<div class="container mt-4">
<div claas="card shadow-sm p-4">
 <h3 class="mb-4">Crie uma Postagem</h3>   

<form action="postagem.php" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-6 mb-3">
    <label for="postagem_titulo">Titulo da postagem</label>
   <input class="form-control" type="text" name="postagem_titulo" id="postagem_titulo" autocomplete="off" required>
   </div>
   </div>

    <div class="row">
    <div class="col-md-6 mb-3">
       <label for="postagem_imagem">Imagem da postagem (OPCIONAL)</label>
   <input class="form-control" type="file" name="postagem_imagem" id="postagem_imagem" autocomplete="off">
   </div>
   </div>

   <div class="row">
    <div class="col-md-6 mb-3">
   <label class="form-label" for="postagem_conteudo">Conteudo da postagem</label>
   <input class="form-control" type="text" name="postagem_conteudo" id="postagem_conteudo" autocomplete="off" required>
   </div>
   </div>

   <div class="col-md-6 mb-3">
   <label class="form-label" for="postagem_categoria">Categoria</label>
   <input class="form-control" type="text" name="postagem_categoria" id="postagem_categoria" autocomplete="off" required>
    </div>
    </div>

   <button class="btn btn-primary w-100" type="submit" name="enviar">Cadastrar</button>
</form>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>

<?php 

$pasta_final = "C:/xampp/htdocs/mini-tcc/Alberto_Lucas_Willian/front_end/postagem/assests/postagem_imagem/";
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