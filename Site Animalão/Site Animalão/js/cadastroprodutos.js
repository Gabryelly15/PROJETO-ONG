document.addEventListener('DOMContentLoaded', function () {
    exibirProdutosCadastrados();

    var formCadastro = document.getElementById('formCadastroProduto');
    formCadastro.addEventListener('submit', function (event) {
        event.preventDefault();
        cadastrarProduto();
    });

    var containerProdutos = document.querySelector("#listaProdutos");
    containerProdutos.addEventListener('click', function (event) {
        if (event.target.classList.contains('remover-produto')) {
            var nomeProduto = event.target.getAttribute('data-nome');
            removerProduto(nomeProduto);
        }
    });
});

// Função para exibir os produtos cadastrados
function exibirProdutosCadastrados() {
    var produtosCadastrados = JSON.parse(localStorage.getItem("produtos")) || [];
    var produtosDinamicos = JSON.parse(sessionStorage.getItem("produtosDinamicos")) || [];
    var todosProdutos = produtosCadastrados.concat(produtosDinamicos);
    var containerProdutos = document.querySelector("#listaProdutos");

    if (!containerProdutos) {
        console.error("Elemento containerProdutos não encontrado.");
        return;
    }

    containerProdutos.innerHTML = ''; // Limpar o conteúdo anterior

    todosProdutos.forEach(function (produto) {
        var listItem = document.createElement('li');

        var produtoHTML = `
            <span>${produto.nome}</span>
            <button class="botao-remover">Remover</button> <!-- Alterado a classe do botão para 'botao-remover' -->
        `;
        listItem.innerHTML = produtoHTML;

        containerProdutos.appendChild(listItem);
    });
}


// Função para cadastrar um novo produto
function cadastrarProduto() {
    var nomeProduto = document.getElementById('nomeProduto').value;
    var imagemProduto = document.getElementById('imagemProduto').value;
    var valorProduto = document.getElementById('valorProduto').value;

    if (!nomeProduto || !imagemProduto || !valorProduto) {
        alert("Por favor, preencha todos os campos.");
        return;
    }

    var novoProduto = {
        nome: nomeProduto,
        imagem: imagemProduto,
        valor: valorProduto
    };

    var produtosDinamicos = JSON.parse(sessionStorage.getItem("produtosDinamicos")) || [];
    produtosDinamicos.push(novoProduto);
    sessionStorage.setItem("produtosDinamicos", JSON.stringify(produtosDinamicos));

    exibirProdutosCadastrados();
    document.getElementById('formCadastroProduto').reset();
}

// Função para remover um produto
function removerProduto(nomeProduto) {
    var produtosCadastrados = JSON.parse(localStorage.getItem("produtos")) || [];
    var produtosDinamicos = JSON.parse(sessionStorage.getItem("produtosDinamicos")) || [];

    var todosProdutos = produtosCadastrados.concat(produtosDinamicos);
    var produtosFiltrados = todosProdutos.filter(function (produto) {
        return produto.nome !== nomeProduto;
    });

    // Verificar se o produto removido está em localStorage ou sessionStorage
    if (localStorage.getItem("produtos")) {
        localStorage.setItem("produtos", JSON.stringify(produtosFiltrados));
    } else {
        sessionStorage.setItem("produtosDinamicos", JSON.stringify(produtosFiltrados));
    }

    exibirProdutosCadastrados();
}
