//Para valores

const myObserver = new IntersectionObserver((natela) => {
    natela.forEach((natela) => {
        if(natela.isIntersecting){
            natela.target.classList.add('visivel-valores')
        } else {
            natela.target.classList.remove('visivel-valores')
        }

    })

})

const myObserver1 = new IntersectionObserver((natela) => {
    natela.forEach((natela) => {
        if(natela.isIntersecting){
            natela.target.classList.add('visivel-time')
        } else {
            natela.target.classList.remove('visivel-time')
        }

    })

})

 // Para a valores
 const elementos = document.querySelectorAll('.invisivel-valores')

 elementos.forEach((elemento) => myObserver.observe(elemento))

 // Para time

const elementos1 = document.querySelectorAll('.invisivel-time')

elementos1.forEach((elemento1) => myObserver1.observe(elemento1))