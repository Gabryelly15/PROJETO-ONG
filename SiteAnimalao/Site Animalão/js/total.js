document.addEventListener('DOMContentLoaded', function() {
    var carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];
    var subtotalElement = document.getElementById('subtotal');
    var totalElement = document.getElementById('total');

    function calcularTotalCompra() {
        var subtotal = 0;
        carrinho.forEach(function(item) {
            subtotal += item.preco || 0;
        });
        return subtotal;
    }

    function atualizarResumoCompra() {
        var subtotal = calcularTotalCompra();
        var total = subtotal; // Aqui você pode adicionar descontos, impostos, etc., se necessário
        subtotalElement.textContent = subtotal.toFixed(2);
        totalElement.textContent = total.toFixed(2);
    }

    // Chame a função para atualizar o resumo da compra quando a página carregar e sempre que houver alterações no carrinho
    atualizarResumoCompra();
    window.addEventListener('storage', atualizarResumoCompra);
});
