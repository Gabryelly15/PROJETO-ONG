<?php

include 'bancoadocao.php';
$id = $_GET['id'];

$sql = "DELETE FROM `adocao` WHERE id_adocao = $id";
$deletar = mysqli_query($conn,$sql)

?>

<div class="container" style="width:400px">
        <h3>Removido com Sucesso!</h3>
        <div style="margin-top: 10px">
        <a href="listar_adocaoperdidos.php" class=" btn btn-sm btn-warning" style="color:#fff">Voltar</a>
        </div>
</div>