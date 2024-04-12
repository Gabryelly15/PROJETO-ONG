<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "login";

$mysqli = new mysqli($host, $usuario, $senha, $banco);

if ($mysqli->connect_error) {
    die("Erro na conexão: " . $mysqli->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['nomecompleto'])) {
        echo "Preencha seu nome completo";
    } else if (empty($_POST['cpf'])) {
        echo "Preencha seu CPF";
    } else if (empty($_POST['email'])) {
        echo "Preencha seu e-mail";
    } else if (empty($_POST['senha'])) {
        echo "Preencha sua senha";
    } else {

        $nomecompleto = $_POST["nomecompleto"];
        $cpf = $_POST["cpf"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];


        function validarCpf($cpf) {
            $cpf = preg_replace('/[^0-9]/', '', $cpf);

            if (strlen($cpf) != 11) {
                return false;
            }

            for ($i = 9; $i < 11; $i++) {
                $soma = 0;
                for ($j = 0; $j < $i; $j++) {
                    $soma += $cpf[$j] * (($i + 1) - $j);
                }
                $resto = $soma % 11;
                $digito = ($resto < 2) ? 0 : 11 - $resto;
                if ($cpf[$i] != $digito) {
                    return false;
                }
            }

            return true;
        }

        if (!validarCpf($cpf)) {
            echo "CPF inválido" ;
        }

        $sql = "INSERT INTO cadastro (nomecompleto, cpf, email, senha) VALUES (?, ?, ?, ?)";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("ssss", $nomecompleto, $cpf, $email, $senha);

        if ($stmt->execute()) {
            echo "Cadastro realizado com sucesso!";
        } else {
            echo "Erro ao cadastrar: " . $mysqli->error;
        }
        $stmt->close();
    }
}

$mysqli->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Cadastre-se</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <header>Cadastro</header>
            <form action="" method="post">

                <div class="field input">
                    <label for="nomecompleto">Nome Completo</label>
                    <input type="text" name="nomecompleto" id="nomecompleto" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="cpf">CPF</label>
                    <input type="text" name="cpf" id="cpf" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="confirmar_senha">Confirmar Senha</label>
                    <input type="password" name="confirmar_senha" id="confirmar_senha" autocomplete="off" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Cadastrar">
                </div>

                <div class="links">
                    Já possui cadastro? <a href="index.php">Entre</a>
                </div>

            </form>
        </div>
    </div>
</body>
</html>