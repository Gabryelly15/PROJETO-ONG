//Para a adoação

const myObserver = new IntersectionObserver((natela) => {
    natela.forEach((natela) => {
        if(natela.isIntersecting){
            natela.target.classList.add('visivel-adocao')
        } else {
            natela.target.classList.remove('visivel-adocao')
        }

    })

})


//Para a loja

 const myObserver1 = new IntersectionObserver((natela1) => {
     natela1.forEach((natela1) => {
       
        if(natela1.isIntersecting){
            natela1.target.classList.add('visivel-loja')
        } else {
            natela1.target.classList.remove('visivel-loja')
        }


     })

 })


 // Para a adoação
const elementos = document.querySelectorAll('.invisivel-adocao')

elementos.forEach((elemento) => myObserver.observe(elemento))


// Para a loja

const elementos1 = document.querySelectorAll('.invisivel-loja')

elementos1.forEach((elemento1) => myObserver1.observe(elemento1))