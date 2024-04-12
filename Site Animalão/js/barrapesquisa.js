document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.querySelector('.search-bar input[type="text"]');
    const searchButton = document.querySelector('.search-bar button');
    const cards = document.querySelectorAll('.card');

    function scrollToCard() {
        const searchTerm = searchInput.value.trim().toLowerCase();
        cards.forEach(card => {
            const cardTitle = card.querySelector('h4').textContent.trim().toLowerCase();
            if (cardTitle.includes(searchTerm)) {
                card.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    }

    searchButton.addEventListener('click', function (event) {
        event.preventDefault();
        scrollToCard();
    });

    searchInput.addEventListener('keypress', function (event) {
        if (event.key === 'Enter') {
            event.preventDefault();
            scrollToCard();
        }
    });
});
