// Supondo que você tenha uma variável ou função para obter a contagem de produtos no carrinho
let productCount = 0; // Atualize isso com a contagem real

// Atualiza a contagem de produtos no carrinho
function updateCartCount(count) {
    const cartCountElement = document.getElementById('cartCount');
    cartCountElement.textContent = count;
}

// Exemplo de chamada para atualizar a contagem de produtos (chame isso sempre que a contagem mudar)
updateCartCount(productCount);
