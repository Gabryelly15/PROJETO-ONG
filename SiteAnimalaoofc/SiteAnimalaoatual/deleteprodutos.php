<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mansao";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Verifica se o ID do produto foi enviado
if(isset($_POST['id'])) {
    $id = $_POST['id'];
    
    // Query SQL para excluir o produto com o ID especificado
    $sql = "DELETE FROM produtos WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Produto excluído com sucesso!";
    } else {
        echo "Erro ao excluir o produto: " . $conn->error;
    }
}

$conn->close();


?>

<script>
window.location.href='admloja.php';
</script>