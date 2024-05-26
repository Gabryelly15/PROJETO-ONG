import { idsProdutoCarrinhoComQuantidade, atualizarQtdCarrinho } from "./menuCarrinho.js";
// Defina uma variável global para armazenar a quantidade de itens no carrinho
let itemCount = 0;



// Função para atualizar o contador de itens no carrinho e exibi-lo no ícone do carrinho
//function updateCartCounter() {


    //for( const qtd in idsProdutoCarrinhoComQuantidade){

                       // let contagem = idsProdutoCarrinhoComQuantidade[qtd];
        //itemCount = idsProdutoCarrinhoComQuantidade[qtd];
                       //console.log(itemCount);
        //console.log(idsProdutoCarrinhoComQuantidade[qtd]);

    //}
    //const cartCounter = document.getElementById('cart-counter');
    //cartCounter.textContent = itemCount;
    //console.log('Contador atualizado:', itemCount);


    //let soma = 0;
        



//}

                                    // Adicione um evento de clique aos botões "Comprar" em cada card
const buyButtons = document.querySelectorAll('.botao-padrao');
buyButtons.forEach(button => {
    button.addEventListener('click', () => {
                                   // Incrementa o contador de itens no carrinho
        //itemCount++;
                                   // console.log('Item adicionado ao carrinho. Novo contador:', itemCount);


        //let soma = 0;
        //for( const qtd in idsProdutoCarrinhoComQuantidade){

                                  // let contagem = idsProdutoCarrinhoComQuantidade[qtd];
            //soma = idsProdutoCarrinhoComQuantidade[qtd];
            //console.log(soma);
        //}

           
                                  // console.log(idsProdutoCarrinhoComQuantidade);


        //console.log(contagem);
        // Atualiza o contador de itens no carrinho
        //updateCartCounter();

        atualizarQtdCarrinho();





    });
});
