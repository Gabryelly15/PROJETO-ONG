// Função para abrir o pop-up de adicionar novo post
function openPopup() {
    console.log("Abrindo pop-up...");
    var popup = document.getElementById("post-popup");
        popup.classList.add("overlay"); // Adiciona a classe overlay
    }
    
    console.log("Popup encontrado:", popup);
    if (popup) {
        popup.style.visibility = "visible";
    } else {
        console.log("Elemento #post-popup não encontrado.");
    }

// Função para fechar o pop-up de adicionar novo post
function closePopup() {
    var popup = document.getElementById("post-popup");
    popup.style.visibility = "hidden";
}

// Adicionar evento de clique ao botão "Adicionar Novo Post" após o carregamento do DOM
document.addEventListener("DOMContentLoaded", function() {
    console.log("DOM carregado. Adicionando evento de clique ao botão...");
    var addPostButton = document.getElementById("add-post-button");
    console.log("Botão encontrado:", addPostButton);
    if (addPostButton) {
        addPostButton.addEventListener("click", openPopup);
    } else {
        console.log("Botão #add-post-button não encontrado.");
    }
});
