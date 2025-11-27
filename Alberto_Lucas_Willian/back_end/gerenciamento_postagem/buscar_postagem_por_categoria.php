<?php
	include '../cors.php';
	include '../conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém o corpo da solicitação POST
    $data = file_get_contents("php://input");

    // Decodifica o JSON para um objeto PHP
    $requestData = json_decode($data);
    
    // Agora você pode acessar os dados usando $requestData
    $categoria = $requestData->postagem_categoria;

    // Realiza a busca da postagem em acordo com "postagem_categoria"
    $busca_por_categoria = $connection->prepare("SELECT * FROM postagem WHERE postagem_categoria = ?");
    $busca_por_categoria->bind_param("s", $categoria);
    $busca_por_categoria->execute();
    $result = $busca_por_categoria->get_result();

    if ($result->num_rows > 0) {
        $postagens = [];
        while ($row = $result->fetch_assoc()) {
            array_push($postagens, $row);
        }

        $response = [
            'postagens' => $postagens
        ];

    } else {
        $response = [
            'blogs' => 'O ID inserido não existe.'
        ];
    }

    echo json_encode($response);
	} // Fim If
?>