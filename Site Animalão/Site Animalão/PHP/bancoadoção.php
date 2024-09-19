<?php
// Conexão
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adocao";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$NomeAds = $_POST['NomeAds'];
$descricaoAds = $_POST['descricaoAds'];
$imagemads = $_FILES['imagemads'];

$sql = "INSERT INTO adoção (NomeAds, descricaoAds, imagemads) VALUES ('$NomeAds', '$descricaoAds', '$imagemads')";


if ($conn->query($sql) === TRUE) {
    echo "Dados inseridos com sucesso";
} else {
    echo "Erro ao inserir dados: " . $conn->error;
}

$conn->close();
?>