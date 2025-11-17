<?php
	include 'cors.php';
	include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "DELETE") {
    // Obtém o corpo da solicitação POST
    $data = file_get_contents("php://input");

    // Decodifica o JSON para um objeto PHP
    $requestData = json_decode($data);

    // Agora você pode acessar os dados usando $requestData
    $codigo = $requestData->cadastro_id;

	// "cadastro_id" é o nome da coluna que está sendo enviado pelo cliente

    // Deleta o blog selecionado pelo ID
	$sql = "DELETE FROM blog_simples WHERE blog_id='$codigo'";

    if ($connection->query($sql) === true) {
        $response = [
            'mensagem' => 'Blog apagado com sucesso!'
        ];
    } else {
        $response = [
            'mensagem' => $connection->error
        ];
    }
    echo json_encode($response);
}   
?>