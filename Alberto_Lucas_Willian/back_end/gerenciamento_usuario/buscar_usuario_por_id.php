<?php
	include 'cors.php';
	include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém o corpo da solicitação POST
    $data = file_get_contents("php://input");

    // Decodifica o JSON para um objeto PHP
    $requestData = json_decode($data);
    
    // Agora você pode acessar os dados usando $requestData
    $id = $requestData->usuario_id;

    // Realiza a busca do usuario em acordo com o ID do usuario
	$sql = "SELECT * FROM usuario WHERE usuario_id = '$id'";

    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        $usuarios = [];
        while ($row = $result->fetch_assoc()) {
            array_push($usuarios, $row);
        }

        $response = [
            'usuarios' => $usuarios
        ];

    } else {
        $response = [
            'usuarios' => 'O ID inserido não existe.'
        ];
    }

    echo json_encode($response);
	} // Fim If
?>