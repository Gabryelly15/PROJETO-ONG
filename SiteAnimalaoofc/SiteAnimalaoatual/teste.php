
?>
        <form action="atualizar_produto.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <label for="nome">Nome do Produto:</label><br>
            <input type="text" id="nome" name="nome" value="<?php echo $row['nome']; ?>" required><br><br>

            <label for="preco">Preço do Produto:</label><br>
            <input type="text" id="preco" name="preco" value="<?php echo $row['preco']; ?>" required><br><br>

            <label for="descricao">Descrição:</label><br>
            <textarea id="descricao" name="descricao" required><?php echo $row['descricao']; ?></textarea><br><br>

            <input type="submit" value="Atualizar Produto">
        </form>
