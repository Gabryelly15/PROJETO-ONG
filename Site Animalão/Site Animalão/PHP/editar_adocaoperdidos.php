<?php

include 'bancoadoção.php';

echo $id = $_GET['id']

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="./" type="image/x-icon">
        <link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon">
        <title>Adoção e Perdidos</title>
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/carrosel.css">
        <link rel="stylesheet" href="css/faixa.css">
        <link rel="stylesheet" href="css/adocao.css">
        <link rel="stylesheet" href="css/rodape.css">
        <link rel="stylesheet" href="css/sobrenos.css">
        <link rel="stylesheet" href="css/sobrenos2.css">
        <link rel="stylesheet" href="css/voluntariado.css">
        <link rel="stylesheet" href="css/perdido.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="shortcut icon" href="./" type="image/x-icon">
        <link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@700&family=Barlow:wght@400;600&display=swap" rel="stylesheet">
        <!-- Google Fonts Link For Icons -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link rel="stylesheet" href="css/adocaopage.css" />
        <script src="js/adocaopage.js" defer></script>
        <link rel="stylesheet" href="css/inputadocao.css">
        <link rel="stylesheet" href="css/perdidoinputacao.css">
        <link rel="stylesheet" href="css/achadopop.css">
        <script src="js/perdidoinputacao.js" defer></script>
        <script src="js/inputadocao.js" defer></script>
        <script src="js/perdido.js" defer></script>
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
          <div class="menu">
              <ul>
                <li><a href="Index.html">Pagina Inicial</a></li>
                <li><a href="#sobre-nos">Sobre Nós</a></li>
                <li><a href="adocao.html">Adote</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="./PHP/loja.php">Loja</a></li>
                <li><a href="#footer_content">Contatos</a></li>
              </ul>
          </div><!-- Termina o Menu-->
      </header_fino>
  </header>

    <!-- INICIA SLIDERS ADOÇÃO - PARTE GABY-->
  <main>
<section class="adocaomain">
    <div class="container">
      <h3>Cadastro de Adoção:</h3>
        </div>

        <div class="box-cadastro-animal" id="cadastroAnimalButtonContainer">
            <a href="#cadastroAnimalModal" class="button-cadastro-animal" id="cadastroAnimalButton">Cadastrar Novo Animal</a>
        </div>


<!-- Pop-up de cadastro (Gaby) -->
<div class="overlay" id="cadastroProduto">
    <div class="wrapper">
        <h2>Cadastre um novo animal:</h2>
        <a href="#" class="close">&times;</a>
        <div class="content">
            <div class="container_produtos">
                <form action="atualizar_adocaoperdidos.php" method="POST" enctype="multipart/form-data">
                    <?php

                    $sql = "SELECT * FROM `adocao` WHERE id_adocao = $id";
                    $buscar = mysql_query($conn,$sql);

                    while($array = mysql_fetch_array($buscar)) {
                        $id_adocao = $array['id_adocao'];
                        $NomeAds = $array['NomeAds'];
                        $descricaoAds = $array['descricaoAds'];
                        $imagemads = $array['imagemads'];

                    ?>

                    <label for="NomeAds">Nome do Bichinho:</label>
                    <input type="text" id="NomeAds" name="NomeAds" value="<?php echo $NomeAds?>" required>
                    <input type="text" id="NomeAds" name="id" value="<?php echo $id ?>" style="display: none">
                    <label for="descricaoAds">Descrição do bichinho:</label>
                    <input type="text" id="descricaoAds" name="descricaoAds" value="<?php echo $descricaoAds?>" required>
                    <div class="fotoadm">
                    <label class="label1" for="imagemads" id="imagemads-preview">
                        <img class="image-admin1" src="https://bit.ly/3ubuq5o" alt="">
                            <input class="img-input" type="file" id="imagemads" name="imagemads-preview" accept="image/*" value="<?php echo $imagemads?>" style="opacity: 0; width: 100%; height: 100%;">
                    </label>
                    </div>
                    <div class="botaocadastraradocao">
                    <button type="submit">Cadastrar</button>
                    </div>
                    <?php } ?>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Achados e perdidos - Victor-->
<section class="adocaomain1">
    <div class="container1">
    <h3>Cadastro de Achados e Perdidos:</h3>
        </div>

    <div class="box-cadastro-animal" id="cadastroAnimalButtonContainer">
        <a href="#cadastroAnimalModal" class="button-cadastro-animal" id="cadastroAnimalButton">Cadastrar Novo Animal</a>
    </div>
    

    <div class="overlay-cadastro-animal" id="cadastroAnimalModal">
        <div class="wrapper-cadastro-animal">
            <h2>Cadastre um novo animal:</h2>
            <a href="#" class="close-cadastro-animal" id="closeModal">&times;</a>
            <div class="content-cadastro-animal">
                <div class="container-animais">
                    <form action="atualizar_adocaoperdidos.php" method="POST" enctype="multipart/form-data">

                    <?php

                    $sql = "SELECT * FROM `` WHERE id_perdidos = $id";
                    $buscar = mysql_query($conn,$sql);

                    while($array = mysql_fetch_array($buscar)) {
                        $id_perdidos = $array[''];
                        $NomePerd = $array[''];
                        $descricaoPerd = $array[''];
                        $imagemPerd = $array[''];

                    ?>

                        <label for="nomeDog">Nome do Bichinho:</label>
                        <input type="text" id="NomePerd" name="NomePerd" value="<?php echo $NomePerd?>" required>
                        <label for="descricaoDog">Descrição do Bichinho:</label>
                        <input type="text" id="descricaoPerd" name="descricaoPerd" value="<?php echo $descricaoPerd?>" required>
                        <label class="label" for="fileAnimal">
                            <div class="image-upload">
                                <img src="https://bit.ly/3ubuq5o" alt="Upload de imagem" class="upload-placeholder">
                                <input class="img-input" type="file" id="imagemPerd" name="imagemPerd" accept="image/*" value="<?php echo $imagemPerd?>" style="opacity: 0; width: 100%; height: 100%;">
                            </div>
                        </label>
                        <button type="submit">Cadastrar</button>
                    </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>


    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-success btn-lg d-grid gap-2 d-md-flex justify-content-md-end" href="listar_adocaoperdidos.php" role="button" style="margin-right: 40px;">Tabela de Edições</a>
    </div>

    <script src="perdidopop.js"></script>

        </main>
        </section>

    <!-- RODAPÉ-->

    <footer>
      <div id="footer_content">
          <div id="footer_contacts">
              <h1>Mansão Animalão</h1>
              <p>Preservando a vida de nossos bichinhos</p>

              <div id="footer_social_media">
                  <a href="https://www.instagram.com/mansao.animalao/" class="footer-link" id="instagram">
                      <i class="fa-brands fa-instagram"></i>
                  </a>


                  <a href="https://wa.me/5511991501521?text=Ol%C3%A1+gostaria+de+adotar+um+Pet+%F0%9F%90%95" class="footer-link" id="whatsapp">
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


      <div id="footer_copyright">
          &#169
          2024 todos os direitos reservados
      </div>
  </footer>

  </body>
</html>