import { catalogo } from "./utilidades.js";
import { adicionarAoCarrinho } from "./menuCarrinho.js";

export function renderizarCatalogo() {
   
  for (const produtoCatalogo of catalogo) {
    const cartaoProduto = `<div class='card ' id="card-produto-${produtoCatalogo.id}">
        <img
        src="imagem/${produtoCatalogo.imagem}"
        alt="${produtoCatalogo.nome}"
        class='produto-imagem'
        />
        
        <div class="card-body">
        <h4 class='produto-title'>${produtoCatalogo.nome}</h4>
        <h4 class='preco-produto'>$${produtoCatalogo.preco}</h4>
        <button id='adicionar-${produtoCatalogo.id}' class='botao-padrao'
        >Adicionar ao carrinho</button>

        </div>
        </div>`;








    document.getElementById("container-produto").innerHTML += cartaoProduto;
  }


  for (const produtoCatalogo of catalogo) {
    document
      .getElementById(`adicionar-${produtoCatalogo.id}`)
      .addEventListener("click", () => adicionarAoCarrinho(produtoCatalogo.id));
  }
}
