<?php

// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mansao";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}



// Função para buscar o item no banco de dados
function buscarItem($conn, $id) {
    $sql = "SELECT * FROM produtos WHERE id = $id";
    $result = $conn->query($sql);
    return $result->fetch_assoc();
}

// Função para atualizar o item no banco de dados
function atualizarItem($conn, $id, $nome, $preco, $imagem) {
    $sql = "UPDATE produtos SET nome='$nome', preco=$preco, imagem='imagem/$imagem' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Item atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar o item: " . $conn->error;
    }
}

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    $imagem = $_POST["imagem"];

    atualizarItem($conn, $id, $nome, $preco, $imagem);
}

// Fecha a conexão com o banco de dados
$conn->close();

?>

<script>
window.location.href='admloja.php';
</script>