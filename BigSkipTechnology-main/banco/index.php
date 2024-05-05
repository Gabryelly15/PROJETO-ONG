<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
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
			<?php

			include('php/config.php');
			if(isset($_POST["submit"])) {
				//$userid = mysqli_real_escape_string($con,$_POST['userid']);
				$username = mysqli_real_escape_string($con,$_POST['email']);
				$password = mysqli_real_escape_string($con,$_POST['password']);
				$result = mysqli_query($con,"SELECT * FROM users WHERE username='$username' AND password='$password'") or die("Select error");
				$row = mysqli_fetch_assoc($result);

				if(is_array($row) && !empty($row)){
					$_SESSION['valid'] = $row['email'];
					//$_SESSION['userid'] = $row['userid'];
					$_SESSION['username'] = $row['username'];
					//$_SESSION['email'] = $row['email'];
					$_SESSION['password'] = $row['password'];
					$_SESSION['ename'] = $row['ename'];
					$_SESSION['name'] = $row['name'];
					$_SESSION['rg'] = $row['rg'];
					$_SESSION['cpf'] = $row['cpf'];
					$_SESSION['emailresp'] = $row['emailresp'];
				}else{
					echo "<div class='message'>
						<p>Username ou Senha errados</p>
					  </div> <br>";
				echo "<a href='index.php'><button class='btn'>Voltar</button>";
			}
			if(isset($_SESSION['valid'])){
				header("Location: Index.html");
			}
			}else{
			?>
            <header>Login</header>
			<form action="" method="post">
			
			    <!--<div class="field input">
					<label for="username">Username</label>
					<input type="text" name="username" id="username" required>
				</div> -->

				<div class="field input">
					<label for="email">Username</label>
					<input type="text" name="email" id="email" required>
				</div>
			
			    <div class="field input">
					<label for="userid">User ID</label>
					<input type="text" name="userid" id="userid" required>
				</div>
				
				<div class="field input">
					<label for="password">Senha</label>
					<input type="password" name="password" id="password" autocomplete="off" required>
				</div>
				
				<div class="field">
					<input type="submit" class="btn" name="submit" value="Login" required>
				</div>
				
				<div class="links">
					Ainda não tem uma conta? <a href="register.php">Cadastre-se!</a>
				</div>
				
			</form>
        </div>
		<?php } ?>
      </div>
</body>
</html>