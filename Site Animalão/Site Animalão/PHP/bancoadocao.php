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

$id_adocao = $array['id_adocao'];
$NomeAds = $_POST['NomeAds'];
$descricaoAds = $_POST['descricaoAds'];
$imagemads = $_FILES['imagemads'];

$sql = "INSERT INTO adocao (id_adocao, NomeAds, descricaoAds, imagemads) VALUES ('$id_adocao', '$NomeAds', '$descricaoAds', '$imagemads')";


if ($conn->query($sql) === TRUE) {
    echo "Dados inseridos com sucesso";
} else {
    echo "Erro ao inserir dados: " . $conn->error;
}

$conn->close();
?>