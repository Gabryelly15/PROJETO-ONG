const initLostFoundSlider = () => {
    const lostFoundImageList = document.querySelector(".slider-wrapper.lost-found .image-list");
    const lostFoundSlideButtons = document.querySelectorAll(".slider-wrapper.lost-found .slide-button");
    const lostFoundSliderScrollbar = document.querySelector(".container .slider-scrollbar.lost-found");
    const lostFoundScrollbarThumb = lostFoundSliderScrollbar.querySelector(".scrollbar-thumb");

    // Slide images according to the slide button clicks
    lostFoundSlideButtons.forEach(button => {
        button.addEventListener("click", () => {
            const direction = button.id === "prev-slide-lost-found" ? -1 : 1; // Corrigido para o ID correto do botão de slide
            const scrollAmount = lostFoundImageList.clientWidth * direction;
            lostFoundImageList.scrollBy({ left: scrollAmount, behavior: "smooth" });
        });
    });

    // Handle scrollbar thumb drag
    lostFoundScrollbarThumb.addEventListener("mousedown", (e) => {
        const startX = e.clientX;
        const thumbPosition = lostFoundScrollbarThumb.offsetLeft;
        const maxThumbPosition = lostFoundSliderScrollbar.getBoundingClientRect().width - lostFoundScrollbarThumb.offsetWidth;
        
        // Update thumb position on mouse move
        const handleMouseMove = (e) => {
            const deltaX = e.clientX - startX;
            const newThumbPosition = thumbPosition + deltaX;

            // Ensure the scrollbar thumb stays within bounds
            const boundedPosition = Math.max(0, Math.min(maxThumbPosition, newThumbPosition));
            const scrollPosition = (boundedPosition / maxThumbPosition) * (lostFoundImageList.scrollWidth - lostFoundImageList.clientWidth);
            
            lostFoundScrollbarThumb.style.left = `${boundedPosition}px`;
            lostFoundImageList.scrollLeft = scrollPosition;
        }

        // Remove event listeners on mouse up
        const handleMouseUp = () => {
            document.removeEventListener("mousemove", handleMouseMove);
            document.removeEventListener("mouseup", handleMouseUp);
        }

        // Add event listeners for drag interaction
        document.addEventListener("mousemove", handleMouseMove);
        document.addEventListener("mouseup", handleMouseUp);
    });

    // Show or hide slide buttons based on scroll position
    const handleSlideButtons = () => {
        lostFoundSlideButtons[0].style.display = lostFoundImageList.scrollLeft <= 0 ? "none" : "flex";
        lostFoundSlideButtons[1].style.display = lostFoundImageList.scrollLeft >= (lostFoundImageList.scrollWidth - lostFoundImageList.clientWidth) ? "none" : "flex";
    }

    // Update scrollbar thumb position based on image scroll
    const updateScrollThumbPosition = () => {
        const scrollPosition = lostFoundImageList.scrollLeft;
        const thumbPosition = (scrollPosition / (lostFoundImageList.scrollWidth - lostFoundImageList.clientWidth)) * (lostFoundSliderScrollbar.clientWidth - lostFoundScrollbarThumb.offsetWidth);
        lostFoundScrollbarThumb.style.left = `${thumbPosition}px`;
    }

    // Call these two functions when image list scrolls
    lostFoundImageList.addEventListener("scroll", () => {
        updateScrollThumbPosition();
        handleSlideButtons();
    });

    // Call these functions when the window resizes or loads
    window.addEventListener("resize", () => {
        updateScrollThumbPosition();
        handleSlideButtons();
    });
}

// Initialize the slider for the "Achados e Perdidos" section when the window loads
window.addEventListener("load", initLostFoundSlider);
