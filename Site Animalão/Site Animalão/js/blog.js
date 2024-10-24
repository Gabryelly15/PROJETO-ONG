document.addEventListener("DOMContentLoaded", function() {
    const modal = document.getElementById("postModal");
    const modalTitle = document.getElementById("modalPostTitle");
    const modalContent = document.getElementById("modalPostContent");
    const modalImage = document.getElementById("modalPostImage");
    const span = document.getElementsByClassName("close")[0];

    // Função para abrir o modal com as informações do post
    function openModal(postTitle, postContent, postImage) {
        modalTitle.innerText = postTitle;
        modalContent.innerText = postContent;
        modalImage.src = postImage;
        modal.style.display = "block";
    }

    // Fecha o modal quando o botão de fechar for clicado
    span.onclick = function() {
        modal.style.display = "none";
    }

    // Fecha o modal quando clicar fora dele
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    // Adiciona evento de clique para abrir o modal em cada post-card
    document.querySelectorAll(".post-card").forEach(card => {
        card.addEventListener("click", function() {
            const postTitle = card.querySelector("h2").innerText;
            const postContent = card.querySelector("p").innerText;
            const postImage = card.querySelector("img").src;
            openModal(postTitle, postContent, postImage);
        });
    });
});
