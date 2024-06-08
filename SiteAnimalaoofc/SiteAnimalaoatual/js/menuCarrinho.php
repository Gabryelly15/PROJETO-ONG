<?php

include("conexao.php");
include("utilidades.php");
//include("./loja.php");

?>

<script>

import { /*catalogo,*/ salvarLocalStorage } from "./utilidades.js";

export const idsProdutoCarrinhoComQuantidade = {};

function abrirCarrinho() {
  document.getElementById("carrinho").classList.add("js-carrinho-aberto");
  document.getElementById("carrinho").classList.remove("js-carrinho-fechado");
}

function fecharCarrinho() {
  document.getElementById("carrinho").classList.remove("js-carrinho-aberto");
  document.getElementById("carrinho").classList.add("js-carrinho-fechado");
}

export function inicializarCarrinho() {
  const botaoFecharCarrinho = document.getElementById("fechar-carrinho");
  const botaoAbrirCarrinho = document.getElementById("abrir-carrinho");

  botaoFecharCarrinho.addEventListener("click", fecharCarrinho);
  botaoAbrirCarrinho.addEventListener("click", abrirCarrinho);
}

function removerDoCarrinho(idProduto) {
  delete idsProdutoCarrinhoComQuantidade[idProduto];
  salvarLocalStorage("carrinho", idsProdutoCarrinhoComQuantidade);
  atualizarPrecoCarrinho();
  renderizarProdutosCarrinho();
  atualizarQtdCarrinho();
}

function incrementarQuantidadeProduto(idProduto) {
  idsProdutoCarrinhoComQuantidade[idProduto]++;
  salvarLocalStorage("carrinho", idsProdutoCarrinhoComQuantidade);
  atualizarPrecoCarrinho();
  atualizarInformacaoQuantidade(idProduto);
  atualizarQtdCarrinho();
}

function decrementarQuantidadeProduto(idProduto) {
  if (idsProdutoCarrinhoComQuantidade[idProduto] === 1) {
    removerDoCarrinho(idProduto);
    return;
  }
  idsProdutoCarrinhoComQuantidade[idProduto]--;
  salvarLocalStorage("carrinho", idsProdutoCarrinhoComQuantidade);
  atualizarPrecoCarrinho();
  atualizarInformacaoQuantidade(idProduto);
  atualizarQtdCarrinho();
}

function atualizarInformacaoQuantidade(idProduto) {
  document.getElementById(`quantidade-${idProduto}`).innerText =
    idsProdutoCarrinhoComQuantidade[idProduto];
}







function desenharProdutoNoCarrinho(idProduto) {
  const produto = <?php echo $dado ?>/*catalogo*/.find((p) => p.id === idProduto);
  const containerProdutosCarrinho =
    document.getElementById("produtos-carrinho");

  const elementoArticle = document.createElement("article"); //<article></article>
  //const articleClasses = "container";
  //elementoArticle.classList.add("container");

  elementoArticle.classList.add("js-card-prod-carrinho");
  

  //for (const articleClass of articleClasses) {
  //  elementoArticle.classList.add(articleClass);
  //}


  //<article class="flex bg-slate-100 rounded-lg p-1 relative"></article>


// **<section id="cart-items" class="container">       
//             <!-- Aqui serão adicionados os itens do carrinho -->
//             <div id="cart-items-container">       
//             <img src="imagem/${getNomeImagem(item.nome)}" alt="${item.nome}">
//                 <div class="cart-item-info">
//                     <h3>${item.nome}</h3>
//                     <p>Preço: ${item.preco !== null ? 'R$ ' + item.preco.toFixed(2) : 'Preço indisponível'}</p>
//                     <button class="remover-item" data-index="${index}">Remover</button>
//                     <!-- Botões de quantidade -->
//                     <div class="quantity-buttons">
//                         <button class="quantity-btn decrease">-</button>
//                         <span class="quantity">1</span>
//                         <button class="quantity-btn increase">+</button>
//                     </div>
//                 </div>
//             </div>
//         </section>



  const cartaoProdutoCarrinho = `<button id="remover-item-${
    /*produto.id*/ <?php echo $id ?>
  }" class="remove-button">
  <i class="fa-solid fa-circle-xmark"></i>
    </button>
    <img
      src="imagem/${ /*produto.imagem*/ <?php echo $imagem ?>}"
      alt="Carrinho: ${/*produto.nome*/ <?php echo $nome ?>}"
      class=""
    />
    <div class="cart-item-info">
      <h3 class="">
        ${/*produto.nome*/ <?php echo $nome ?>}
      </h3>
      
      <p class="">$${/*produto.preco*/ <?php echo $preco ?>}</p>
    </div>
    <div class=" js-botao-quantidades ">
      <div class=' quantity-btn decrease'>
          <button id='decrementar-produto-${/*produto.id*/ <?php echo $id ?>}'>-</button>
      </div>
          <p id='quantidade-${/*produto.id*/ <?php echo $id ?>}' class='quantity'>${
      idsProdutoCarrinhoComQuantidade[/*produto.id*/ <?php echo $id ?>]
    }</p>
    <div class=' quantity-btn increase'>
          <button id='incrementar-produto-${/*produto.id*/ <?php echo $id ?>}'>+</button>
      
    </div>`;

    //quantity-buttons
    //class=' quantity-btn increase' 
  //<article class="flex bg-slate-100 rounded-lg p-1 relative">codigo do cartao do produto</article>

  elementoArticle.innerHTML = cartaoProdutoCarrinho;
  containerProdutosCarrinho.appendChild(elementoArticle);

  document
    .getElementById(`decrementar-produto-${/*produto.id*/ <?php echo $id ?>}`)
    .addEventListener("click", () => decrementarQuantidadeProduto(/*produto.id*/ <?php echo $id ?>));

  document
    .getElementById(`incrementar-produto-${/*produto.id*/ <?php echo $id ?>}`)
    .addEventListener("click", () => incrementarQuantidadeProduto(/*produto.id*/ <?php echo $id ?>));

  document
    .getElementById(`remover-item-${/*produto.id*/ <?php echo $id ?>}`)
    .addEventListener("click", () => removerDoCarrinho(/*produto.id*/ <?php echo $id ?>));
}

function renderizarProdutosCarrinho() {
  const containerProdutosCarrinho =
    document.getElementById("produtos-carrinho");
  containerProdutosCarrinho.innerHTML = "";

  for (const idProduto in idsProdutoCarrinhoComQuantidade) {
    desenharProdutoNoCarrinho(idProduto);
  }
}

export function adicionarAoCarrinho(idProduto) {
  if (idProduto in idsProdutoCarrinhoComQuantidade) {
    incrementarQuantidadeProduto(idProduto);
    
    
    return;
  }
  idsProdutoCarrinhoComQuantidade[idProduto] = 1;
  salvarLocalStorage("carrinho", idsProdutoCarrinhoComQuantidade);
  desenharProdutoNoCarrinho(idProduto);
  atualizarPrecoCarrinho();
  
}

export function atualizarPrecoCarrinho() {
    const precoCarrinho = document.getElementById("preco-total");
    let precoTotalCarrinho = 0;
    for (const idProdutoNoCarrinho in idsProdutoCarrinhoComQuantidade) {
      precoTotalCarrinho +=
      <?php echo $dado ?>/*catalogo*/.find((p) => p.id === idProdutoNoCarrinho).preco *
        idsProdutoCarrinhoComQuantidade[idProdutoNoCarrinho];
    }
    precoCarrinho.innerText = `Total: $${precoTotalCarrinho}`;
  }


  export function atualizarQtdCarrinho() {
    const QtdCarrinho = document.getElementById("cart-counter");
    let QtdTotalCarrinho = 0;
    for (const idProdutoNoCarrinho in idsProdutoCarrinhoComQuantidade) {
      QtdTotalCarrinho +=
      
        idsProdutoCarrinhoComQuantidade[idProdutoNoCarrinho];
    }
    QtdCarrinho.innerText = QtdTotalCarrinho;
  }


</script>
