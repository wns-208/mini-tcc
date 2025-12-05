<?php
include "../Alberto_Lucas_Willian/back_end/conexao.php";
session_start();
$id_usuario = $_SESSION["id"];
?>

<h1>Customize sua foto de perfil aqui!</h1>
<form action="imagens_perfil.php" method="post" enctype="multipart/form-data"> <!-- Lembre-se de colocar o enctype correto, é precisso para realizar o upload de arquivos -->
    <label for="foto">Selecione uma foto para servir como foto de perfil:</label>
    <input type="file" name="foto" id="foto">
    <button type="submit" name="enviar">Enviar Foto</button>
</form>

<?php
$pasta_final = "../Alberto_Lucas_Willian/front_end/usuarios/assests/perfil/";
$arquivo_selecionado = $pasta_final.basename($_FILES["foto"]["name"]);
$arquivo_filtrado = basename($arquivo_selecionado);
$validacao = explode(".", basename($arquivo_selecionado));

if ($validacao[1] == "jpeg") {
    if (isset($_POST["enviar"]) && $_FILES["foto"]["error"] == UPLOAD_ERR_OK) {

        if (move_uploaded_file($_FILES["foto"]["tmp_name"], $arquivo_selecionado)) {
            $atualizar_foto_perfil = $connection->prepare("UPDATE usuario SET usuario_foto_perfil = ? WHERE usuario_id = ?");
            $atualizar_foto_perfil->bind_param("si", $arquivo_filtrado, $id_usuario);

            if ($atualizar_foto_perfil->execute()) {
                echo "Foto de perfil autualizada";

            } else {
                echo "Erro em atualizar a foto: " . $atualizar_foto_perfil->error;
            }

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