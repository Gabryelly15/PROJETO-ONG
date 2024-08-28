<?php

$hostname = 'localhost'; // ou o endereço do seu servidor MySQL
$username = 'root';
$password = '';
$database = 'mansao';

// Conexão com o banco de dados
$conn = new mysqli($hostname, $username, $password, $database);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
} else {
    //echo "Conexão bem-sucedida!";
}

?>