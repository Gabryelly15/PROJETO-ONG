<?php
include("conexao.php");
include("./js/menuCarrinho.php");
//include("./js/utilidades.php");

$consulta = "SELECT * FROM produtos";

$con = $mysqli -> query($consulta) or die ($mysqli -> error);

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="./" type="image/x-icon">
        <link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon">
        <title>Mansão Animalão</title>
        <link rel="stylesheet" href="css/about.css">
        <link rel="stylesheet" href="css/headerloja.css">
        <link rel="stylesheet" href="css/faixa.css">
        <link rel="stylesheet" href="css/adocao.css">
        <link rel="stylesheet" href="css/rodape.css">
        <link rel="stylesheet" href="css/produtos.css">
        <link rel="stylesheet" href="css/menul.css">
        <link rel="stylesheet" href="css/barrapesquisaloja.css">
        <link rel="stylesheet" href="css/nextpagebar.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer">
        <script src="js/menulateral.js" defer></script>
        <script src="js/menususp.js" defer></script>
        <script src="js/nextpage.js" defer></script>
        <script src="js/barrapesquisa.js" defer></script>
        <script src="js/cadastroprodutos.js" defer></script>
        <link rel="shortcut icon" href="./" type="image/x-icon">
        <link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" 
            rel="stylesheet"
            integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" 
            crossorigin="anonymous">
        <link rel="stylesheet" href="Contact form to email.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
        </script>
        <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@700&family=Barlow:wght@400;600&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-wErF9e0w6Xwn2gviLQu1NSJvSma84cniNIWIF1i6bPfW1o2H+tgeMpvGmJ7yYfKJ" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-3VdBvL5SWsm/jO99pfvzYLgyrlYfr3lZCzJO3FzEW1QbS6KE3Df4xVs3z5V/4xgt" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+JqO2jN6J/QEnmHa+MVyEyNaT7p4UwJUbyyaX9TlT2HV3gR" crossorigin="anonymous"></script>

        <style>
            body {
                background-color: #fff5eb;
            }
        </style>
    </head>

<body>

    <header>
        <div class="container-logo">
            <div class="logo-imagem">
                <img src="./imagem/Logo Preto.png" style="width: 55px; height: 55px;">
            </div>
            <div class="title-image">
                <a href="Index.html" class="header-link"><img src="https://fontmeme.com/permalink/240324/f5d00cad0b996bfa45075ad72ebce4ab.png" alt="fonte-best-school" style="pointer-events: none;"></a>
            </div>
            
        </div><!-- Termina o Conatiner.logo-->
        
        <header_fino>

             <!-- Menu lateral (Anny) - (Este botão só aparecerá na página "Loja") 
        <button id="menuButton" class="menu-button">  <img src="imagem/botãomenul.png" alt="Ícone do Menu">MENU</button-->
                <!-- Barra de Pesquisa (Anny) -->
                <!-- <div class="search-bar">
                    <input type="text" id="searchInput" placeholder="Pesquisar...">
                    <button type="button" id="searchButton">
                        <img src="imagem/lupa.png" alt="Buscar" style="width: 20px; height: 20px;">
                        <span>BUSCAR</span>
                    </button>
                </div> -->
                

                <!--menu ja existente-->
            <div class="menu">
                <ul>
                    <li><a href="Index.html">Pagina Inicial</a></li>
                        <li><a href="#sobre-nos">Sobre Nós</a></li>
                        <li><a href="adocao.html">Adote</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="loja.html">Loja</a></li>
                        <li><a href="#footer_content">Contatos</a></li>
                    
                </ul> <!--menu ja existente-->
               
                <!--termina botão o menu lateral e barra de pesquisa-->
             
            </div><!-- Termina o Menu-->
        </header_fino>
    </header>
    
    <!--Menu suspenso do menu lateral (ANNY)
    <div id="menuDropdown" class="menu-dropdown">
        <ul>
            <li><a href="Index.html">Início</a></li>
            <li><a href="carrinho.html">Carrinho</a></li>
            <li><a href="login.html">Login</a></li>
            <li><a href="">ETC...</a></li>
        </ul>
    </div> -->
    <!--Botão carrinho (Anny)-->
    <div class="cart-container">
        <button id="abrir-carrinho">
            <img src="imagem/carrinho.png" alt="Carrinho">
            <span id="cart-counter">0</span>

        </button>
    </div>
    <main class="background-image"><!--alteração anny pra colocar logo no fundo no css-->


        <!-- carrinho na lateral -->


        <section
      id="carrinho"
      class=" js-carrinho js-carrinho-fechado    fixed top-0 right-[-360px] bg-slate-950 h-screen w-[360px] text-slate-200 z-50 duration-200 border-l border-slate-200 p-5 flex flex-col justify-between"
    >
      <div id="cabecalho-carrinho" class=" js-cabecalho-carrinho  flex justify-between m-4">
        <p>Meu carrinho</p>
        <button id="fechar-carrinho">
          <i class="fa-solid fa-circle-xmark"></i>
        </button>
      </div>
      <section
        id="produtos-carrinho"
        class=" js-produtos-carrinho  h-3/5 overflow-y-auto flex flex-col gap-2"
      ></section>
      <p id="preco-total" class="bg-slate-200 text-green-800 rounded-sm pl-5">
        Total: R$0,00
      </p>
      <button
        class="bg-slate-200 text-slate-900 p-1 hover:text-slate-200 hover:bg-slate-900"
        id="finalizar-compra"
      >
        Finalizar Compra
      </button>
    </section>

    <h1 id="Titulo-loja" class="fw-bold">Produtos para seu pet!</h1>

    <div class="search-bar">
        <input type="text" id="searchInput" placeholder="Pesquisar...">
        <button type="button" id="searchButton">
            <img src="imagem/lupa.png" alt="Buscar" style="width: 20px; height: 20px;">
            <span>BUSCAR</span>
        </button>
    </div>




        <!-- Cards João -->
    <!-- <section id="container-produto" class="produtosdispostos">

    </section> -->
    
    <?php


        
        While($dado = $con -> fetch_array()){ 

        
                $id = $dado['id'];
                $nome = $dado['nome'];
                $preco = $dado['preco'];
                $imagem = $dado['imagem'];

                ?>

                
                <div class='card ' id="card-produto-<?php echo $id ?>">
                <img
                src="<?php echo $imagem ?>"
                alt="<?php echo $nome ?>"
                class='produto-imagem'
                />
                
                

                <div class="card-body">
                <h4 class='produto-title'><?php echo $nome ?></h4>
                <h4 class='preco-produto'>$<?php echo $preco ?></h4>
                
                <button id='adicionar-<?php echo $id ?>' class='botao-padrao'>Adicionar ao carrinho</button>

                
                

                </div>
                </div>

    

    
         <!-- While($dado1 = $con -> fetch_array())  -->
            <script>
                // import { adicionarAoCarrinho } from "./menuCarrinho.js";
            document
              .getElementById(`adicionar-<?php echo $id ?>`)
              .addEventListener("click", () => adicionarAoCarrinho(<?php echo $id ?>));
            </script>
          
    <?php } ?>


    


    
   
</main>
<!--Botão próxima pág (ANNY)-->
<div class="pagination-buttons">
    <button class="previous-page" style="color: #09a304; background-color: transparent;">← Página Anterior</button>
    <span class="page-info"></span>
    <button class="next-page" style="color: #09a304; background-color: transparent;">Próxima Página →</button>
</div>

<footer>
    <div id="footer_content">
        <div id="footer_contacts">
            <h1>Mansão Animalão</h1>
            <p>Preservando a vida de nossos bichinhos</p>

            <div id="footer_social_media">
                <a href="https://www.instagram.com/mansao.animalao/" class="footer-link" id="instagram">
                    <i class="fa-brands fa-instagram"></i>
                </a>


                <a href="https://wa.me/5511991501521?text=Olá+gostaria+de+adotar+um+Pet+🐕" class="footer-link" id="whatsapp">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>
            </div>
        </div>

        <div id="footer_subscribe">
            <h3>Se inscreva!</h3>
            <p>Clique aqui para se cadastrar no nosso site, ou fazer login se já tem uma conta!</p>
            <div id="input_group">
                <button id="subscribe_button">
                    <i class="fa-regular fa-envelope"></i>
                </button>
            </div>
        </div>
    </div>

    <script>
        document.getElementById("subscribe_button").addEventListener("click", function() {
            // Redirecionar para a página de cadastro
            window.location.href = "cadastrologin.html";
        });
    </script>

    <div id="footer_copyright">
        &#169
        2024 todos os direitos reservados
    </div>
</footer>


<script type="module" src="./js/main.js"></script>


<script type="module" src="./js/utilidades.js"></script>
<script type="module" src="./js/cartaoproduto.js"></script>
<script type="module" src="./js/menuCarrinho.js"></script>
<script type="module" src="./js/carrinho.js"></script>




</body>
</html>
