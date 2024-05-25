// Aguarda o carregamento completo do DOM antes de executar o código
document.addEventListener('DOMContentLoaded', function () {
    // Seleciona o input de pesquisa e o botão de busca
    const searchInput = document.querySelector('.search-bar input[type="text"]');
    const searchButton = document.querySelector('.search-bar button');

    // Seleciona todos os cards de produto
    const cards = document.querySelectorAll('.card');

    // Função para rolar até o card correspondente ao termo de pesquisa
    function scrollToCard() {
        // Obtém o termo de pesquisa, remove espaços em branco e converte para minúsculas
        const searchTerm = searchInput.value.trim().toLowerCase();

        // Itera sobre cada card
        cards.forEach(card => {
            // Obtém o texto do título do card, remove espaços em branco e converte para minúsculas
            const cardTitle = card.querySelector('h4').textContent.trim().toLowerCase();

            // Verifica se o termo de pesquisa está presente no título do card
            if (cardTitle.includes(searchTerm)) {
                // Se o termo de pesquisa estiver presente, rola até o início do card de forma suave
                card.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    }

    // Adiciona um ouvinte de evento para o clique no botão de busca
    searchButton.addEventListener('click', function (event) {
        // Impede o comportamento padrão do botão (enviar formulário)
        event.preventDefault();
        
        // Chama a função para rolar até o card correspondente
        scrollToCard();
    });

    // Adiciona um ouvinte de evento para a tecla Enter pressionada no input de pesquisa
    searchInput.addEventListener('keypress', function (event) {
        // Verifica se a tecla pressionada é Enter
        if (event.key === 'Enter') {
            // Impede o comportamento padrão do Enter (enviar formulário)
            event.preventDefault();
            
            // Chama a função para rolar até o card correspondente
            scrollToCard();
        }
    });
});
