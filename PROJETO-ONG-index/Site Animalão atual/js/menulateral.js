document.addEventListener('DOMContentLoaded', function() {
    // Verifica se estamos na página "Loja" e mostra o botão "Menu"
    if (window.location.pathname.includes('loja.html')) {
        document.getElementById('menuButton').style.display = 'block';
    }

    // Adiciona evento de clique no botão "Menu"
    document.getElementById('menuButton').addEventListener('click', function() {
        // Toggle class "active" para mostrar/esconder o menu
        var menuDropdown = document.getElementById('menuDropdown');
        menuDropdown.classList.toggle('active');
    });

    // Adiciona um event listener para o evento de rolagem da página
    window.addEventListener('scroll', function() {
        // Fecha o menu se estiver aberto
        var menuDropdown = document.getElementById('menuDropdown');
        if (menuDropdown.classList.contains('active')) {
            menuDropdown.classList.remove('active');
        }
    });
});
