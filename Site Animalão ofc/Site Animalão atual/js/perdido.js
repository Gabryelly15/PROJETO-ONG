const initSlider1 = () => {
    const imageList = document.querySelector(".slider-wrapper1 .image-list1");
    const slideButtons = document.querySelectorAll(".slider-wrapper1 .slide-button1");
    const sliderScrollbar = document.querySelector(".container1 .slider-scrollbar1");
    const scrollbarThumb = sliderScrollbar.querySelector("scrollbar-thumb1");
    const maxScrollLeft = imageList.scrollWidth - imageList.clientWidht;
    


    //Slide Images according to the slide button clicks
    slideButtons.forEach(button =>{
        button.addEventListener("click", () => {
            const direction = button.id === "prev-slide1" ? -1 : 1;
            const scrollAmount = imageList.clientWidth * direction;
            imageList.scrollBy({left:scrollAmount, behavior: "smooth"});
        });
    });

    // Show or hide slide buttons based on scroll position
    const handleSlideButtons = () => {
        slideButtons[0].style.display = imageList.scrollLeft <= 0 ? "none" : "flex";
        slideButtons[1].style.display = imageList.scrollLeft >= maxScrollLeft ? "none" : "flex";
    }

   // Update scrollbar thumb position based on image scroll
    const updateScrollThumbPosition = () => {
    const scrollPosition = imageList.scrollLeft;
    const thumbPosition = (scrollPosition / maxScrollLeft) * (sliderScrollbar.clientWidth - scrollbarThumb.offsetWidth);
    scrollbarThumb.style.left = `${thumbPosition}px`;
}

    imageList.addEventListener("scroll", () => {
        handleSlideButtons();
        updateScrollThumbPosition();
    }); 
}

window.addEventListener("load",initSlider1);

