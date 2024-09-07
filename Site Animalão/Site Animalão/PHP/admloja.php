<?php 

include("conexao.php");


// if($_POST){
//     exit("submetido");
// }



?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../" type="image/x-icon">
        <link rel="shortcut icon" href="../assets/favicon.png" type="image/x-icon">
        <title>Mansão Animalão</title>
        <!-- <link rel="stylesheet" href="css/about.css"> -->
        <link rel="stylesheet" href="../css/headerloja.css">
        <link rel="stylesheet" href="../css/faixa.css">
        <link rel="stylesheet" href="../css/adocao.css">
        <link rel="stylesheet" href="../css/rodape.css">
        <!-- <link rel="stylesheet" href="css/produtos.css"> -->
        <link rel="stylesheet" href="../css/produtosajustados.css">
        <link rel="stylesheet" href="../css/admloja.css">
        <link rel="stylesheet" href="../css/menul.css">
        <link rel="stylesheet" href="../css/barrapesquisaloja.css">
        <link rel="stylesheet" href="../css/nextpagebar.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer">
        <script src="../js/menulateral.js" defer></script>
        <script src="../js/menususp.js" defer></script>
        <script src="../js/nextpage.js" defer></script>
        <script src="../js/barrapesquisa.js" defer></script>
        <script src="../js/cadastroprodutos.js" defer></script>
        <link rel="shortcut icon" href="../" type="image/x-icon">
        <link rel="shortcut icon" href="../assets/favicon.png" type="image/x-icon">
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
                <img src="../imagem/Logo Preto.png" style="width: 55px; height: 55px;">
            </div>
            <div class="title-image">
                <a href="../Index.html" class="header-link"><img src="https://fontmeme.com/permalink/240324/f5d00cad0b996bfa45075ad72ebce4ab.png" alt="fonte-best-school" style="pointer-events: none;"></a>
            </div>
            
        </div><!-- Termina o Conatiner.logo-->
        
        <header_fino>

            <div class="menu">
                <ul>
                    <li><a href="../Index.html">Pagina Inicial</a></li>
                        <li><a href="../sobrenos.html">Sobre Nós</a></li>
                        <li><a href="../adocao.html">Adote</a></li>
                        <li><a href="../blog.html">Blog</a></li>
                        <li><a href="loja.php">Loja</a></li>
                        <li><a href="#footer_content">Contatos</a></li>
                        
                    
                </ul> <!--menu ja existente-->
               
                <!--termina botão o menu lateral e barra de pesquisa-->
             
            </div><!-- Termina o Menu-->
        </header_fino>
    </header>
    
  <main>

  <h1 class="fw-bold">Lista de Produtos</h1>
  

  <!-- Botão para abrir o pop-up de cadastro de produtos -->
<!-- <div class="box" id="cadastroProdutoButton"  >
    <a href="#cadastroProduto" class="button" style="margin-right: 10px; padding: 8px 16px; font-size: 14px; font-weight: bold;">Cadastrar novo produto</a>
</div> -->
<!-- Pop-up de cadastro de produtos (Anny) -->





<div class="overlay" id="cadastroProduto">
    <div class="wrapper">
        <h2>Cadastrar Novo Produto:</h2>
        <a href="#" class="close">&times;</a>
        <div class="content">
            <div class="container_produtos">
                <form id="formCadastroProduto" action="cadastrodeprodutos.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">

                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" required>

                    <label for="preco">Valor:</label>
                    <input type="text" id="preco" name="preco" required>

                    <label for="imagem">Imagem (jpg, jpeg, png):</label>
                    <input type="file" id="imagem" name="imagem" accept="image/jpeg, image/png" required>
                    <!-- <input type="submit" id= "btncadastrar" value="Cadastrar"> -->
                    <input type="submit" value="Cadastrar Produto">
                </form>
            </div>
        </div>
    </div>

    

</div>
























  <section class="lista-produtos">

  <?php
  // Query para selecionar dados
$sql = "SELECT id, nome, preco, imagem FROM produtos WHERE nome <> '' ORDER BY id";
$result = $conn->query($sql);

// Verificar se a consulta retornou resultados
if ($result->num_rows > 0) {
    // Exibir os dados em uma tabela

    ?> <table class="table"> <?php

    echo"
    <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Preço</th>
    <th>Imagem</th>
    <th>Editar</th>
    <th>Remover</th>
    </tr>";
    // Loop através de cada linha de dados
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"]. "</td>";
        echo "<td>" . $row["nome"]. "</td>";
        echo "<td>" . $row["preco"]. "</td>";
        // echo "<td><img src=" . $row["imagem"]. "alt=""></td>";?>

        <td><img src="<?php echo $row["imagem"];?>" alt="<?php echo $row["imagem"];?>"style = "width: 50px;"></td><?php
        
        
        echo "<td><form action='editar_produto.php' method='post'>";
        echo "<input type='hidden' name='id' value='".$row["id"]."'>";
        echo "<input type='submit' value='Editar'></form></td>";
        

        echo "<td><form action='deleteprodutos.php' method='post'>";
        echo "<input type='hidden' name='id' value='".$row["id"]."'>";
        echo "<input type='submit' value='Excluir'></form></td>";



        echo "</tr>";
    }
    echo "</table> <hr>";
} else {
    echo "0 resultados";
}

// Fechar conexão
$conn->close();
?>
    </section>


    <div class="divcadastro">
    <h3 class="fw-bold">Cadastrar Novo Produto:</h3>
        
        <div class="content">
            <div class="container_produtos">
                <form id="formCadastroProduto" action="cadastrodeprodutos.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">

                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" required>

                    <label for="preco">Valor:</label>
                    <input type="text" id="preco" name="preco" required>

                    <label for="imagem">Imagem (jpg, jpeg, png):</label>
                    <input type="file" id="imagem" name="imagem" accept="image/jpeg, image/png" required>
                    <!-- ja estava fora <input type="submit" id= "btncadastrar" value="Cadastrar"> -->
                    <input type="submit" value="Cadastrar Produto" class="botao-padrao inputadd">
                </form>
            </div>
        </div>
    </div>

  </main>
  
   
        


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






</body>
</html>