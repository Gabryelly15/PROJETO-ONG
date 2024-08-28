console.log("Script menususp.js carregado com sucesso!");
document.getElementById('menuButton').addEventListener('click', function() {
    console.log("Botão de menu clicado!");
    var menuDropdown = document.getElementById('menuDropdown');
    menuDropdown.classList.toggle('active');
});

menulateral.js
document.addEventListener('DOMContentLoaded', function() {
    // Verifica se estamos na página "Loja" e mostra o botão "Menu"
    if (window.location.pathname.includes('loja.html')) {
        document.getElementById('menuButton').style.display = 'block';
    }

    // Adiciona evento de clique no botão "Menu"
    document.getElementById('menuButton').addEventListener('click', function() {
        // Toggle class "active" para mostrar/esconder o menu
        document.getElementById('menuDropdown').classList.toggle('active');
        
        // Adiciona a classe "inactive" quando o menu é fechado
        var menuDropdown = document.getElementById('menuDropdown');
        if (!menuDropdown.classList.contains('active')) {
            menuDropdown.classList.add('inactive');
        } else {
            menuDropdown.classList.remove('inactive');
        }
    });
});
