<?php
	include '../cors.php';
	include '../conexao.php';

    // Realiza a busca completa de todos os usuarios registrados
if ($_SERVER["REQUEST_METHOD"] == "GET") {

	$sql = "SELECT * FROM usuario";

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
            'usuarios' => 'Nenhum usario encontrado!'
        ];
    }

    echo json_encode($response);
	} // Fim If
?>