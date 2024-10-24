<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Listagem de Adoção e Perdidos</title>
</head>

<body>

<!--Mostra a listagem dos animais para adoção. Botão de editar e excluir. (Gaby)-->

<div class="container" style="margin-top: 30px;">
  <br>
<h3>Lista de Adoção</h3>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome Animal</th>
      <th scope="col">Descrição Animal</th>
      <th scope="col">Imagem</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>

    <?php
      include 'bancoadoção.php';
      $sql = "SELECT * FROM `adocao`";
      $busca = mysqli_query($conn, $sql);

      while ($array = mysql_fetch_array($busca)){
        $id_adocao = $array['id_adocao'];
        $NomeAds = $array['NomeAds'];
        $descricaoAds = $array['descricaoAds'];
        $imagemads = $array['imagemads'];
      ?>

    <tr>
      <td><?php echo $NomeAds ?></td>
      <td><?php echo $descricaoAds ?></td>
      <td><?php echo $imagemads ?></td>
      <td><a class="btn btn-warning btn-sm" style="color:#fff" href="editar_adocaoperdidos.php?id=<?php echo $id_adocao ?>" role="button">Editar</a>
      <a class="btn btn-danger btn-sm" style="color:#fff" href="deletar_adocaoperdidos.php?id=<?php echo $id_perdidos ?>" role="button">Remover</a></td>
    </tr>
    <?php } ?>

</table>
</div>

<!--Mostra a listagem dos animais achados e perdidos. Botão de editar e excluir. (Gaby)-->

<div class="container" style="margin-top: 30px;">
  <br>
<h3>Lista de Achados e Perdidos</h3>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome Animal</th>
      <th scope="col">Descrição Animal</th>
      <th scope="col">Imagem</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>

<!--Pendente criar tabela perdidos. Seguir nomenclatura das variaveis conforme abaixo-->

    <?php
      include '';
      $sql = "SELECT * FROM ``";
      $busca = mysqli_query($conn, $sql);

      while ($array = mysql_fetch_array($busca)){
        $id_perdidos = $array[''];
        $NomePerd = $array[''];
        $descricaoPerd = $array[''];
        $imagemPerd = $array[''];
      ?>

    <tr>
      <td><?php echo $NomePerd ?></td>
      <td><?php echo $descricaoPerd ?></td>
      <td><?php echo $imagemPerd ?></td>
      <td><a class="btn btn-warning btn-sm" style="color:#fff" href="editar_adocaoperdidos.php?id=<?php echo $id_perdidos ?>" role="button">Editar</a>
      <a class="btn btn-danger btn-sm" style="color:#fff" href="deletar_adocaoperdidos.php?id=<?php echo $id_perdidos ?>" role="button">Remover</a></td>
    </tr>
    <?php } ?>

</table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
</body>
</html>