<form action="imagens_ignore.php" method="post" enctype="multipart/form-data"> <!-- Lembre-se de colocar o enctype correto, é precisso para realizar o upload de arquivos -->
    <label for="foto">Selecione uma foto qualquer:</label>
    <input type="file" name="foto" id="foto">
    <input type="enviar" value="Enviar foto" name="enviar">
</form>

<?php
$pasta_final = "C:/xampp/htdocs/mini-tcc/Alberto_Lucas_Willian/assets/";
$arquivo_selecionado = $pasta_final.basename($_FILES["foto"]["name"]);
$statusOk = true;

if (isset($_POST["enviar"]) && $_FILES["foto"]["error"] == UPLOAD_ERR_OK) {
    if (move_uploaded_file($_FILES["foto"]["tmp_name"], $arquivo_selecionado)) {
        echo 'A foto ' . htmlspecialchars(basename($_FILES["foto"]["name"])) . ' foi enviada.';
    } else {
        echo 'Erro em enviar a foto.';
    }
} else {
    echo 'Erro em enviar a foto OU uma foto não foi selecionada.';
}
?>