<form action="imagens_postagem.php" method="post" enctype="multipart/form-data"> <!-- Lembre-se de colocar o enctype correto, é precisso para realizar o upload de arquivos -->
    <label for="foto">Selecione uma foto para representar essa postagem:</label>
    <input type="file" name="foto" id="foto">
    <button type="submit" name="enviar">Enviar Foto</button>
</form>

<?php
$pasta_final = "C:/xampp/htdocs/mini-tcc/Alberto_Lucas_Willian/front_end/usuarios/assests/postagem/";
$arquivo_selecionado = $pasta_final.basename($_FILES["foto"]["name"]);
$validacao = explode(".", basename($arquivo_selecionado));
if ($validacao[1] == "jpeg") {
    if (isset($_POST["enviar"]) && $_FILES["foto"]["error"] == UPLOAD_ERR_OK) {
        if (move_uploaded_file($_FILES["foto"]["tmp_name"], $arquivo_selecionado)) {
            echo 'A foto ' . htmlspecialchars(basename($_FILES["foto"]["name"])) . ' foi enviada.';
        } else {
            echo 'Erro em enviar a foto.';
        }
    } else {
        echo 'Erro em enviar a foto OU uma foto não foi selecionada.';
    }
}
else{
    echo('Aceitamos arquivos ".jpeg" somente.');
    exit();
}
?>

<!-- O que "htmlspecialchars", "basename", "move_uploaded_file()", "UPLOAD_ERR_OK", "explode() e $FILES faz?"?
htmlspecialchars = Diz para o PHP que qualquer caractere special como "&" serve como uma STRING, isso previne possivel conflitos.
basename = Em um arquivo nos temos algum parecido como "C:/PASTA1/PASTA2/PASTA3/ARQUIVO" o basename vai remover as partes que não "interessa" ou seja remove todo o caminho MENOS o "ARQUIVO".
move_uploaded_file() = Em nosso computador nos temos uma pasta chamada de "temp", como o proprio nome ja diz, ela é uma pasta TEMPORARIA. Com isso o move_uploaded_file() pega QUALQUER ARQUIVO novo dentro da pasta "temp" e leva ele para uma pasta determinada.
UPLOAD_ERR_OK = É um "check" do PHP que verifica se o upload deu certo ou não.
explode() = Imagine isso como um "Splice" do PHP, ele fragmenta o conteudo até um determinado ponto, esses novos fragmentos são guardados a partir de arrays.
$FILES = É uma superglobal que permite o PHP gerenciar qualquer arquivo novo. -->