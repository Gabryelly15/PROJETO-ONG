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

    // Consulta SQL para obter as informações do produto com o ID especificado
    $sql = "SELECT * FROM produtos WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Exibe o formulário de edição com as informações do produto
        $row = $result->fetch_assoc();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="./" type="image/x-icon">
        <link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon">
        <title>Mansão Animalão</title>
        <!-- <link rel="stylesheet" href="css/about.css"> -->
        <link rel="stylesheet" href="css/headerloja.css">
        <link rel="stylesheet" href="css/faixa.css">
        <link rel="stylesheet" href="css/adocao.css">
        <link rel="stylesheet" href="css/rodape.css">
        <!-- <link rel="stylesheet" href="css/produtos.css"> -->
        <link rel="stylesheet" href="css/produtosajustados.css">
        <link rel="stylesheet" href="css/admloja.css">
        <link rel="stylesheet" href="css/menul.css">
        <link rel="stylesheet" href="css/barrapesquisaloja.css">
        <link rel="stylesheet" href="css/nextpagebar.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer">
        <script src="js/menulateral.js" defer></script>
        <script src="js/menususp.js" defer></script>
        <script src="js/nextpage.js" defer></script>
        <script src="js/barrapesquisa.js" defer></script>
        <script src="js/cadastroprodutos.js" defer></script>
        <link rel="shortcut icon" href="./" type="image/x-icon">
        <link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" 
            rel="stylesheet"
            integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" 
            crossorigin="anonymous">
        <link rel="stylesheet" href="Contact form to email.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
        </script>
        <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@700&family=Barlow:wght@400;600&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-wErF9e0w6Xwn2gviLQu1NSJvSma84cniNIWIF1i6bPfW1o2H+tgeMpvGmJ7yYfKJ" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-3VdBvL5SWsm/jO99pfvzYLgyrlYfr3lZCzJO3FzEW1QbS6KE3Df4xVs3z5V/4xgt" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+JqO2jN6J/QEnmHa+MVyEyNaT7p4UwJUbyyaX9TlT2HV3gR" crossorigin="anonymous"></script>
        <style>
            body {
                background-color: #fff5eb;
            }
        </style>
    </head>




    <div class="divcadastro">
    <h3 class="fw-bold">Atualizar cadastro:</h3>
        
        <div class="content">
            <div class="container_produtos">

        <form action="atualizar.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="<?php echo $row['nome']; ?>" required>

            <label for="preco">Valor:</label>
            <input type="text" id="preco" name="preco" value="<?php echo $row['preco']; ?>" required>

            <label for="imagem">Imagem (jpg, jpeg, png):</label>
                    <input type="file" id="imagem" name="imagem" accept="image/jpeg, image/png" required>
                    <!-- ja estava fora <input type="submit" id= "btncadastrar" value="Cadastrar"> -->
                    <!-- <input type="submit" value="Cadastrar Produto" class="botao-padrao inputadd"> -->

            <input type="submit" value="Atualizar Produto" class="botao-padrao inputadd">
        </form>

        </div>
        </div>
    </div>
<?php
    } else {
        echo "Produto não encontrado.";
    }
} else {
    echo "ID do produto não especificado.";
}

$conn->close();
?>