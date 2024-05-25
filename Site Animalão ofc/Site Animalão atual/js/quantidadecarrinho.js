document.addEventListener('DOMContentLoaded', function() {
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
});
