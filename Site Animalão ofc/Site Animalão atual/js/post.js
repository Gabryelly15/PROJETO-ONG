
// Função para abrir o pop-up ao clicar no botão "Adicionar novo post"
function abrirPopUp(event) {
    event.preventDefault(); // Impede o comportamento padrão do link
    var overlay = document.getElementById('novoPost');
    overlay.style.display = 'flex'; // Altera o estilo para exibir o pop-up
}

// Função para fechar o pop-up ao clicar no botão de fechar ou enviar o formulário
function fecharPopUp() {
    var overlay = document.getElementById('novoPost');
    overlay.style.display = 'none'; // Altera o estilo para ocultar o pop-up
}

// Adicionar evento de clique ao botão "Adicionar novo post" para abrir o pop-up
document.getElementById('novoPostButton').addEventListener('click', abrirPopUp);

// Adicionar evento de clique ao botão de fechar
document.querySelector('.overlay .close').addEventListener('click', fecharPopUp);

// Adicionar evento de submit ao formulário para fechar o pop-up
document.getElementById('formNovoPost').addEventListener('submit', function(event) {
    // Impede o comportamento padrão do formulário (enviar os dados)
    event.preventDefault();
    // Fecha o pop-up
    fecharPopUp();
    // Aqui você pode adicionar o código para enviar os dados do formulário, se necessário
});
