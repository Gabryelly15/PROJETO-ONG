<!DOCTYPE html>
<html lang="pt-br">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valor de Frete</title>
    <link rel="stylesheet" href="style/styles.css" />

    </head>
    <body>
    <div id="fade" class="hide">
      <div id="loader" class="spinner-border text-info hide" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
      <div id="message" class="hide">
        <div class="alert alert-light" role="alert">
          <h4>Mensagem:</h4>
          <p></p>
          <button id="close-message" type="button" class="btn btn-secondary">
            <a href="index.html">Fechar</a>
          </button>
        </div>
      </div>
    </div>

<?php
function calcularFrete($peso, $distancia, $taxaPorKgPorKm, $taxaFixaBase) {
    
    if ($peso <= 0 || $distancia <= 0 || $taxaPorKgPorKm <= 0 || $taxaFixaBase < 0) {
        throw new InvalidArgumentException("Parâmetros inválidos.");
    }

    
    $custoVariavel = $peso * $distancia * $taxaPorKgPorKm;
    $custoTotal = $custoVariavel + $taxaFixaBase;

    return $custoTotal;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $peso = isset($_POST['peso']) ? floatval($_POST['peso']) : 0;
    $distancia = isset($_POST['distancia']) ? floatval($_POST['distancia']) : 0;
    $taxaPorKgPorKm = isset($_POST['taxaPorKgPorKm']) ? floatval($_POST['taxaPorKgPorKm']) : 0;
    $taxaFixaBase = isset($_POST['taxaFixaBase']) ? floatval($_POST['taxaFixaBase']) : 0;

    try {
        $custoFrete = calcularFrete($peso, $distancia, $taxaPorKgPorKm, $taxaFixaBase);
        echo "O custo do frete é: R$ " . number_format($custoFrete, 2, ',', '.');
    } catch (InvalidArgumentException $e) {
        echo "Erro: " . $e->getMessage();
    }
} else {
    echo "Método de requisição inválido.";
}
?>

    </body>
</html>