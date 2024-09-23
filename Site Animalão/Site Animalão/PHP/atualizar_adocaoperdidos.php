<?php

include 'bancoadoção.php';

$id = $_POST['id'];
$NomeAds = $_POST['NomeAds']
$descricaoAds = $_POST['descricaoAds'];
$imagemads = $_POST['imagemads'];

$sql = "UPDATE `adocao` SET `NomeAds`='$NomeAds', `descricaoAds`='$descricaoAds', `imagemads`='$imagemads' WHERE id_adocao = $id";

$atualizar = mysqli_query($conn,$sql);

?>

<div class="container" style="width:400px">
        <h3>Atualizado com Sucesso!</h3>
        <div style="margin-top: 10px">
        <a href="listar_adocaoperdidos.php" class=" btn btn-sm btn-warning" style="color:#fff">Voltar</a>
        </div>
</div>