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
            var qtd = 1;

            // olhar para dentro do array ver se algum objeto tem o nome do produto ja tem, se tiver deve verificar a quantidade e somar 1.

            // for(const item of carrinho){
            //     if (item.nome === nomeProduto){
            //         qtd = item.quantidade + 1;
                    


            //     } else{
            //         qtd = 1;
                    
            //     }
            // }
            carrinho.forEach(verificação => {
                for(prodcar in carrinho){
                    
                }

                for(const item of carrinho){
                    if (item.nome === nomeProduto){
                        qtd = item.quantidade + 1;
                        
    
    
                    } else{
                        qtd = 1;
                        
                    }
                }
            });
                        
            


            carrinho.push({ nome: nomeProduto, preco: precoProduto, quantidade: qtd });

            // for(const produto of carrinho){
            //     console.log(produto.quantidade + 50);
            //  }

             console.log(carrinho);

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
