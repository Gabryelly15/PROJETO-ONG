//Para a adoação

const myObserver = new IntersectionObserver((natela) => {
    natela.forEach((natela) => {
        if(natela.isIntersecting){
            natela.target.classList.add('visivel-valores')
        } else {
            natela.target.classList.remove('visivel-valores')
        }

    })

})

 // Para a adoação
 const elementos = document.querySelectorAll('.invisivel-valores')

 elementos.forEach((elemento) => myObserver.observe(elemento))