document.addEventListener('DOMContentLoaded', function() {
    var carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];
    var cartItems = document.getElementById('cart-items-container');
    
    function renderizarCarrinho() {
        cartItems.innerHTML = '';
        carrinho.forEach(function(item, index) {
            var cartItem = document.createElement('div');
            cartItem.classList.add('cart-item');
            cartItem.innerHTML = `
                <img src="imagem/${getNomeImagem(item.nome)}" alt="${item.nome}">
                <div class="cart-item-info">
                    <h3>${item.nome}</h3>
                    <p>Preço: ${item.preco !== null ? 'R$ ' + item.preco.toFixed(2) : 'Preço indisponível'}</p>
                    <button class="remover-item" data-index="${index}">Remover</button>
                    <!-- Botões de quantidade -->
                    <div class="quantity-buttons">
                        <button class="quantity-btn decrease">-</button>
                        <span class="quantity">1</span>
                        <button class="quantity-btn increase">+</button>
                    </div>
                </div>
            `;
            cartItems.appendChild(cartItem);
        });

        // Adicionar event listeners após a renderização do carrinho
        adicionarEventListeners();
    }

    function adicionarEventListeners() {
        const decreaseButtons = document.querySelectorAll('.quantity-btn.decrease');
        const increaseButtons = document.querySelectorAll('.quantity-btn.increase');
        const quantityDisplays = document.querySelectorAll('.quantity');

        // Adiciona um evento de clique para cada botão de diminuir quantidade
        decreaseButtons.forEach((button, index) => {
            button.addEventListener('click', function() {
                console.log('Botão de diminuir quantidade clicado');
                // Lógica para diminuir a quantidade
                let currentQuantity = parseInt(quantityDisplays[index].textContent);
                if (currentQuantity > 1) {
                    quantityDisplays[index].textContent = currentQuantity - 1;
                }
            });
        });

        // Adiciona um evento de clique para cada botão de aumentar quantidade
        increaseButtons.forEach((button, index) => {
            button.addEventListener('click', function() {
                console.log('Botão de aumentar quantidade clicado');
                // Lógica para aumentar a quantidade
                let currentQuantity = parseInt(quantityDisplays[index].textContent);
                quantityDisplays[index].textContent = currentQuantity + 1;
            });
        });
    }

    function getNomeImagem(nomeProduto) {
        // Mapear cada nome de produto para o nome correspondente do arquivo de imagem
        var imagens = {
            'Coração anatômico de pelúcia': 'coracaoanatomico.jpeg',
            'Ecobag de algodão crú de bichinho' : 'ecobag.jpeg',
            'Tapetinho de pano em forma de ossinho - Abelha' : 'tapeteamarelo.jpeg',
            'Tapetinho de pano em forma de ossinho - Onça' : 'tapetebranco.jpeg',
            'Tapetinho de pano em forma de ossinho - Nuvens' : 'tapetecinza.jpeg',
            'Teste teste teste teste teste': 'bolinhateste.jpg',
            // Adicione mais mapeamentos conforme necessário para outros produtos
        };
        // Verificar se existe um mapeamento para o nome do produto
        if (imagens.hasOwnProperty(nomeProduto)) {
            return imagens[nomeProduto];
        } else {
            // Se não houver um mapeamento específico, retorne um nome padrão
            return 'imagem_padrao.jpeg'; // Nome do arquivo de imagem padrão
        }
    }

    renderizarCarrinho();

    cartItems.addEventListener('click', function(event) {
        if (event.target.classList.contains('remover-item')) {
            var index = parseInt(event.target.dataset.index);
            carrinho.splice(index, 1);
            localStorage.setItem('carrinho', JSON.stringify(carrinho));
            renderizarCarrinho();
        }
    });
});
