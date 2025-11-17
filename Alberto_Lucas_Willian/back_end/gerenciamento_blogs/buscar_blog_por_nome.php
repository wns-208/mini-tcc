<?php
	include 'cors.php';
	include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém o corpo da solicitação POST
    $data = file_get_contents("php://input");

    // Decodifica o JSON para um objeto PHP
    $requestData = json_decode($data);
    
    // Agora você pode acessar os dados usando $requestData
    $titulo = $requestData->blog_titulo;

    // Realiza a busca do blog em acordo com o nome do titulo
	$sql = "SELECT * FROM blog_simples WHERE blog_titulo = '$titulo'";

    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        $blogs = [];
        while ($row = $result->fetch_assoc()) {
            array_push($blogs, $row);
        }

        $response = [
            'blogs' => $blogs
        ];

    } else {
        $response = [
            'blogs' => 'O ID inserido não existe.'
        ];
    }

    echo json_encode($response);
	} // Fim If
?>