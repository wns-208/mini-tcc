<?php
	include 'cors.php';
	include 'conexao.php';

    // Realiza a busca completa de todos os blogs registrados
if ($_SERVER["REQUEST_METHOD"] == "GET") {

	$sql = "SELECT * FROM blog_simples";

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
            'blogs' => 'Nenhum blog encontrado! Espere algum blog ser criado.'
        ];
    }

    echo json_encode($response);
	} // Fim If
?>