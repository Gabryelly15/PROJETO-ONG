<?php
include('conexao.php');

if(isset($_POST['email']) || isset( $_POST['senha'])) {
  if(strlen($_POST['email']) == 0) {
    echo "Preencha seu e-mail";
} else if(strlen($_POST['senha']) == 0) {
    echo "Preencha sua senha";
} else{

  $email = $mysqli->real_escape_string($_POST['email']);
  $senha = $mysqli->real_escape_string($_POST['senha']);

  $sql_code = "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha'";
  $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

  $quantidade = $sql_query->num_rows;

  if($quantidade == 1){
      $usuario = $sql_query->fetch_assoc();

      if(!isset($_SESSION)){
         session_start();
      }
      $_SESSION['id'] = $usuario['id'];
      $_SESSION['nomecompleto'] = $usuario['nomecompleto'];

      header("Location: painel.php");

  } else {  
    echo "Falha ao logar! E-mail ou senha incorretos";

}
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/style.css">
  <title>Login</title>
</head>
<body>
  <div class="container">
  <div class="box form-box">
  <header>Login</header>
  <form action="" method="POST">

      <div class="field input">
          <label for="email">Email</label>
          <input type="text" name="email" id="email" required>
      </div>

      <div class="field input">
          <label for="senha">Senha</label>
          <input type="password" name="senha" id="senha" required>
      </div>

      <div class="field">

        <input type="submit" class= "btn" name="submit" value="Entrar" required>
    </div>
    <div class="links">
        Não possui conta? <a href="register.php">Cadastre-se</a>
    </div>
      
  </form>
  </div>
  </div>
  
</body>
</html>