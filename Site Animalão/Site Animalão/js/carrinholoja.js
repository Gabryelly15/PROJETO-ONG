
document.addEventListener('DOMContentLoaded', function() {
    var carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];

    function atualizarContadorCarrinho() {
        document.getElementById('cart-counter').textContent = carrinho.length;
    }

    atualizarContadorCarrinho();

    var botoesComprar = document.querySelectorAll('.botao-padrao');
    botoesComprar.forEach(function(botao) {
        botao.addEventListener('click', function() {
            var nomeProduto = botao.parentNode.querySelector('.produto-title').textContent;
            var precoTexto = botao.parentNode.querySelector('.preco-produto').textContent;
            var precoProduto = parseFloat(precoTexto.substring(3).replace(',', '.')); // Removendo 'R$ ' e substituindo ',' por '.'
            carrinho.push({ nome: nomeProduto, preco: precoProduto });
            localStorage.setItem('carrinho', JSON.stringify(carrinho));
            atualizarContadorCarrinho();
        });
    });

    document.getElementById('cartButton').addEventListener('click', function() {
        window.location.href = 'carrinho.html';
    });
});


// Impedir a rolagem automática da tela para o ícone do carrinho quando o botão "comprar" for clicado
function stopScrollToCartOnBuy() {
    window.addEventListener("load", function() {
        const buyButtons = document.querySelectorAll('.botao-padrao');
        buyButtons.forEach(function(button) {
            button.addEventListener('click', function(event) {
                event.preventDefault();
            });
        });
    });
}

// Chamar a função para impedir a rolagem automática da tela para o ícone do carrinho quando o botão "comprar" for clicado
stopScrollToCartOnBuy();
