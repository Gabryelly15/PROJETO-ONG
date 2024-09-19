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
$imagemAds = $_FILES['imagemAds'];

$sql = "INSERT INTO adoção (NomeAds, descricaoAds, imagemAds) VALUES ('$NomeAds', '$descricaoAds', '$imagemAds')";


if ($conn->query($sql) === TRUE) {
    echo "Dados inseridos com sucesso";
} else {
    echo "Erro ao inserir dados: " . $conn->error;
}

$conn->close();
?>