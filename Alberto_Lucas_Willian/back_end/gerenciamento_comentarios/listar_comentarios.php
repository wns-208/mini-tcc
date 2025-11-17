<?php
	include 'cors.php';
	include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {

	$sql = "SELECT * FROM cometario_blog";

    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        $comentarios = [];
        while ($row = $result->fetch_assoc()) {
            array_push($comentarios, $row);
        }

        $response = [
            'comentarios' => $comentarios
        ];

    } else {
        $response = [
            'comentarios' => 'Nenhum comentario encontrado! Deseja comentar alguma coisa?'
        ];
    }

    echo json_encode($response);
	} // Fim If
?>