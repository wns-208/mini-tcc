<?php
	$host = "localhost"; // Endereço do servidor
	$usuario = "root"; // Usuário do MySQL
	$senha = ""; // Senha do MySQL
	$database = "blog"; // Nome do banco de dados

	// Cria a conexão
	$connection = new mysqli($host, $usuario, $senha, $database);
	
	// Checa se a conexão foi realizada com sucesso
	if ($connection->connect_error) {
	    die("Falha de conexão: " . $connection->connect_error);
	}
?>