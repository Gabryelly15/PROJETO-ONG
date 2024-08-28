document.addEventListener('DOMContentLoaded', function() {
    const closeModal = document.getElementById('closeModal');
    const overlay = document.getElementById('cadastroAnimalModal');

    closeModal.addEventListener('click', function(event) {
        event.preventDefault();
        window.location.hash = '';
    });

    overlay.addEventListener('click', function(event) {
        if (event.target === overlay) {
            window.location.hash = '';
        }
    });
});
