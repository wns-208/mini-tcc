<?php
	include '../cors.php';
	include '../conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém o corpo da solicitação POST
    $data = file_get_contents("php://input");

    // Decodifica o JSON para um objeto PHP
    $requestData = json_decode($data);
    
    // Agora você pode acessar os dados usando $requestData
    $codigo_id = $requestData->usuario_id;

    // Realiza a busca do usuario em acordo com o ID do usuario
    $busca_por_id = $connection->prepare("SELECT * FROM usuario WHERE usuario_id = ?");
    $busca_por_id->bind_param("i", $codigo_id);
    $busca_por_id->execute();
    $result = $busca_por_id->get_result();
    
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
            'usuarios' => 'Nenhum registro encontrado!'
        ];
    }

    echo json_encode($response);
	} // Fim If
?>