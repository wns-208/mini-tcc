<?php
	include 'cors.php';
	include 'conexao.php';

    // Realiza a busca completa de todos as postagens registrados
if ($_SERVER["REQUEST_METHOD"] == "GET") {

	$sql = "SELECT * FROM postagem";

    $result = $connection->query($sql);

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
            'postagens' => 'Nenhum blog encontrado! Espere algum blog ser criado.'
        ];
    }

    echo json_encode($response);
	} // Fim If
?>