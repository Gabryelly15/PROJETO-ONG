<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <script>
        function validateForm() {
            var nome = document.getElementById("nome").value;
            var preco = document.getElementById("preco").value;
            var descricao = document.getElementById("descricao").value;
            var imagem = document.getElementById("imagem").value;
            
            if (nome == "" || preco == "" || descricao == "" || imagem == "") {
                alert("Por favor, preencha todos os campos.");
                return false;
            }
        }
    </script>
</head>
<body>
    <h2>Cadastro de Produto</h2>
    <form action="processa_cadastro.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
        <label for="nome">Nome do Produto:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="preco">Preço do Produto:</label><br>
        <input type="text" id="preco" name="preco" required><br><br>

        <label for="descricao">Descrição:</label><br>
        <textarea id="descricao" name="descricao" required></textarea><br><br>

        <label for="imagem">Imagem:</label><br>
        <input type="file" id="imagem" name="imagem" accept="image/*" required><br><br>

        <input type="submit" value="Cadastrar Produto">
    </form>
</body>
</html>