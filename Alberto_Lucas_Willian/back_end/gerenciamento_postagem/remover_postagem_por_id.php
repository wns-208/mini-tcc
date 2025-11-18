<?php
	include 'cors.php';
	include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "DELETE") {
    // Obtém o corpo da solicitação POST
    $data = file_get_contents("php://input");

    // Decodifica o JSON para um objeto PHP
    $requestData = json_decode($data);

    // Agora você pode acessar os dados usando $requestData
    $id = $requestData->cadastro_id;

	// "postagem_id" é o nome da coluna que está sendo enviado pelo cliente

    // Deleta a postagem selecionado pelo ID
	$sql = "DELETE FROM postagem WHERE postagem_id='$id'";

    if ($connection->query($sql) === true) {
        $response = [
            'mensagem' => 'Postagem apagada com sucesso!'
        ];
    } else {
        $response = [
            'mensagem' => $connection->error
        ];
    }
    echo json_encode($response);
}   
?>