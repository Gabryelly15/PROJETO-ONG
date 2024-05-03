document.addEventListener('DOMContentLoaded', function() {
    // Verifica se estamos na página "Loja" e mostra o botão "Menu"
    if (window.location.pathname.includes('loja.html')) {
        document.getElementById('menuButton').style.display = 'block';
    }

    // Adiciona evento de clique no botão "Menu"
    document.getElementById('menuButton').addEventListener('click', function() {
        // Toggle class "active" para mostrar/esconder o menu
        document.getElementById('menuDropdown').classList.toggle('active');
    });

    // Adiciona funcionalidade aos botões de paginação
    const previousPageButton = document.querySelector('.previous-page');
    const nextPageButton = document.querySelector('.next-page');
    const pageInfo = document.querySelector('.page-info'); // Elemento onde será exibida a numeração da página

    // Defina a página atual como 1 quando a página é carregada
    let currentPage = 1;
    let totalPages = calculateTotalPages(); // Calcula o número total de páginas
    updatePageInfo(); // Atualiza a exibição da numeração da página

    previousPageButton.addEventListener('click', function() {
        if (currentPage > 1) {
            currentPage--;
            updatePageInfo();
        }
    });

    nextPageButton.addEventListener('click', function() {
        if (currentPage < totalPages) {
            currentPage++;
            updatePageInfo();
        }
    });

    function calculateTotalPages() {
        // Supondo que cada elemento com a classe "card" representa um item a ser paginado
        const itemsPerPage = 5; // Defina o número de itens por página desejado
        const totalItems = document.querySelectorAll('.card').length;
        return Math.ceil(totalItems / itemsPerPage);
    }

    function updatePageInfo() {
        totalPages = calculateTotalPages(); // Atualiza o número total de páginas
        pageInfo.textContent = `Página ${currentPage} de ${totalPages}`;
    }
});
