<?php
// Conexão
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bancoadocao";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$nomeDog = $_POST['nomeDog'];
$descricaoDog = $_POST['descriçãoDog'];


$sql = "INSERT INTO bancoadocao (nomeDog, descricaoDog) VALUES ('$nomeDog', '$descricaoDog')";

if ($conn->query($sql) === TRUE) {
    echo "Dados inseridos com sucesso";
} else {
    echo "Erro ao inserir dados: " . $conn->error;
}

$conn->close();
?>