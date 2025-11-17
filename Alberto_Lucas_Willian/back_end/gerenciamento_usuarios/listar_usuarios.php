<?php
	include 'cors.php';
	include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {

	$sql = "SELECT * FROM cadastro_usuario";

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