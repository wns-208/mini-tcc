<?php
	include '../cors.php';
	include '../conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "DELETE") {
    // Obtém o corpo da solicitação POST
    $data = file_get_contents("php://input");

    // Decodifica o JSON para um objeto PHP
    $requestData = json_decode($data);

    // Agora você pode acessar os dados usando $requestData
    $id = $requestData->usuario_id;

	// "usuario_id" é o nome da coluna que está sendo enviado pelo cliente

    // Deleta o usuario selecionado pelo ID
    $remover_por_id = $connection->prepare("DELETE FROM usuario WHERE usuario_id = ?");
    $remover_por_id->bind_param("i", $id);
    $remover_por_id->execute();

    if ($remover_por_id->affected_rows == 1) {
        $response = [
            'mensagem' => 'Registro apagado com sucesso!'
        ];
    } else {
        $response = [
            'mensagem' => $connection->error
        ];
    }
    echo json_encode($response);
}   
?>