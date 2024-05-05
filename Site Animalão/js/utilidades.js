// Array de objetos


export const catalogo = [
    {
      id: "1",
      nome: "Coração anatômico de pelúcia",
      preco: 45,
      imagem: "coracaoanatomico.jpeg"
    },
    {
        id: "2",
        nome: "Coração anatEcobag de algodão crú de bichinhoômico de pelúcia",
        preco: 25,
        imagem: "ecobag.jpeg"
      },
      {
        id: "3",
        nome: "Tapetinho de pano em forma de ossinho - Abelha",
        preco: 40,
        imagem: "tapeteamarelo.jpeg"
      },
      {
        id: "4",
        nome: "Tapetinho de pano em forma de ossinho - Onça",
        preco: 40,
        imagem: "tapetebranco.jpeg"
      },
      {
        id: "5",
        nome: "Tapetinho de pano em forma de ossinho - Nuvens",
        preco: 40,
        imagem: "tapetecinza.jpeg" 
      }
    
      
  ];

  export function salvarLocalStorage(chave, informacao) {
    localStorage.setItem(chave, JSON.stringify(informacao));
  }
  
  export function lerLocalStorage(chave) {
    return JSON.parse(localStorage.getItem(chave));
  }
  
  export function apagarDoLocalStorage(chave) {
    localStorage.removeItem(chave);
  }
  