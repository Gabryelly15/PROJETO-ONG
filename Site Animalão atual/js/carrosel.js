const slider = document.querySelectorAll('.slider');
let currentSlide = 0;
let intervalId; // Variável para armazenar o ID do intervalo

function hideSlider() {
  slider.forEach(item => item.classList.remove('on'));
}

function showSlider() {
  slider[currentSlide].classList.add('on');
}

function nextSlider() {
  hideSlider();
  if (currentSlide === slider.length - 1) {
    currentSlide = 0;
  } else {
    currentSlide++;
  }
  showSlider();
}

function startSlider() {
  intervalId = setInterval(nextSlider, 3000); // Avança para a próxima imagem a cada 3000 milissegundos (3 segundos)
}

function stopSlider() {
  clearInterval(intervalId); // Limpa o intervalo
}

// Inicia o slider automaticamente quando a página carrega
startSlider();
