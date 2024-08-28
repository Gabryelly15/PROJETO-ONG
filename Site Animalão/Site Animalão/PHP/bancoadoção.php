<?php
// Conexão
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adoção";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$Nomeproduto = $_POST['Nomeproduto'];
$Valorproduto = $_POST['Valorproduto'];
$imagemads = $_FILES['imagemads'];

$sql = "INSERT INTO adoção (Nomeproduto, Valorproduto, imagemads) VALUES ('$Nomeproduto', '$Valorproduto', '$imagemads')";


if ($conn->query($sql) === TRUE) {
    echo "Dados inseridos com sucesso";
} else {
    echo "Erro ao inserir dados: " . $conn->error;
}

$conn->close();
?>