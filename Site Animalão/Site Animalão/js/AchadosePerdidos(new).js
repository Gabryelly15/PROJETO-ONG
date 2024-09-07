let index = 1;
showSlides(index);

// Função que avança ou retrocede slides
function addSlides(n) {
  showSlides(index += n);
}

// Função que define o slide atual
function currentSlide(n) {
  showSlides(index = n);
}

// Função principal para mostrar os slides
function showSlides(n) {
  let slides = document.getElementsByClassName("slides");
  let dots = document.getElementsByClassName("dot");

  // Verifica se n está fora do intervalo e ajusta
  if (n > slides.length) {
    index = 1;
  }
  if (n < 1) {
    index = slides.length;
  }

  // Esconde todos os slides e remove a classe 'active' dos pontos
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (let i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }

  // Mostra o slide atual e adiciona a classe 'active' ao ponto correspondente
  slides[index - 1].style.display = "flex"; // Usei "flex" para alinhar corretamente
  dots[index - 1].className += " active";
}
