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

    // Processamento do formulário
$nome = $_POST['nome'];
$preco = $_POST['preco'];



// Upload da imagem
$target_dir = "imagem/";
$target_file = $target_dir . basename($_FILES["imagem"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Verifica se o arquivo de imagem é uma imagem real ou um arquivo falso
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["imagem"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "O arquivo não é uma imagem.";
        $uploadOk = 0;
    }
}



// Verifica se o arquivo já existe
// if (file_exists($target_file)) {
//     echo "Desculpe, o arquivo já existe.";
//     $uploadOk = 0;
// } else
if(

// Verifica o tamanho do arquivo
 $_FILES["imagem"]["size"] > 500000) {
    echo "Desculpe, o arquivo é muito grande.";
    $uploadOk = 0;
} elseif(

// Permitir apenas determinados formatos de arquivo
$imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Desculpe, apenas arquivos JPG, JPEG, PNG & GIF são permitidos.";
    $uploadOk = 0;
}

// Verifica se $uploadOk está configurado como 0 por um erro
if ($uploadOk == 0) {
    echo " Arquivo não foi enviado.";
// Se tudo estiver ok, tenta fazer o upload do arquivo
} else {
    if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $target_file)) {
        echo "O arquivo ". htmlspecialchars( basename( $_FILES["imagem"]["name"])). " foi enviado.";
    } else {
        echo "Desculpe, ocorreu um erro ao enviar o arquivo.";
    }
    // Salva o caminho da imagem no banco de dados
$image_path = $target_file;

// Inserção dos dados no banco de dados
$sql = "INSERT INTO produtos (nome, preco, imagem) VALUES ('$nome', '$preco', '$image_path')";

if ($conn->query($sql) === TRUE) {
    echo "Produto cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar o produto: " . $conn->error;
}


}

// Fechar conexão
$conn->close();


    ?>

<script>
window.location.href='admloja.php';
</script>