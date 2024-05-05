<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/styles.css">
    <title>Registro</title>

	    <!-- Bootstrap -->
		<link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />

    <!-- Bootstrap icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css"
    />

</head>
<body id="checkout-page">
    <div id="fade" class="hide">
      <div id="loader" class="spinner-border text-info hide" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>
      
		
		<?php 
		
		include("php/config.php");
		if(isset($_POST['submit'])){
			$username = $_POST['username'];
			$ename = $_POST['ename'];
			$email = $_POST['email'];
			$name = $_POST['name'];
			$rg = $_POST['rg'];
			$cpf = $_POST['cpf'];
			$emailresp = $_POST['emailresp'];
			$password = $_POST['password'];
			
			
			//VERIFICANDO O EMAIL ÚNICO
			
			$verify_query = mysqli_query($con,"SELECT email FROM users WHERE email='$email'");
			
			if(mysqli_num_rows($verify_query) != 0 ){
				echo "<div class='alert alert-light'>
						<p>Este e-mail já está sendo usado. Tente outro, por favor.</p>
					  </div> <br>";
				
				echo "<a href='javascript:self.history.back()'><button class='btn'>Voltar</button>";
			}
			else{
				
				mysqli_query($con,"INSERT INTO users(USERNAME,ENAME,EMAIL,NAME,RG,CPF,EMAILRESP,PASSWORD) VALUES('$username','$ename','$email','$name','$rg','$cpf','$emailresp','$password')") or die ("Erroe Ocurred");
				
				echo '<div id="fade" class="hide">
				<div id="loader" class="spinner-border text-info hide" role="status">
				  <span class="visually-hidden">Loading...</span>
				</div>
				<div class="hide">
				  <div class="alert alert-light" role="alert">
					<h4>Mensagem:</h4>
					<p>Cadastro feito com sucesso!</p>
					<button type="button" class="btn btn-secondary">
					</button>
				  </div>
						</div> <br>
				  </div>
				</div>
			  </div>';
				
				echo "<div class='d-flex justify-content-center'>
				      <a href='cep.php'><button class='btn btn-secondary'>Próximo</button> </div>";
			}
			

			}else{

		
		?>
		
		<form action="" method="post">

		<div id="order-form-container" class="container p-6 my-md-4 px-md-0">
      <div id="steps" class="mb-md-3 pb-md-3">
        <div class="line"></div>
        <div class="step">
          <i class="bi bi-person active"></i>
          <p class="d-none d-md-block">Criação de conta</p>
        </div>
        <div class="step">
          <i class="bi bi-geo-alt active"></i>
          <p class="d-none d-md-block">Endereço</p>
        </div>
       
      </div>
      <div id="form-header">
        <h2>Cadastre seus dados</h2>
        <p>Preencha os campos para guardarmos suas informações.</p>
      </div>
	  
        <div class="row mb-3">
          <div class="col-12 col-sm-6 mb-3 mb-md-0 form-floating">
            <input
              type="text"
              class="form-control shadow-none"
              id="username"
              name="username"
              placeholder="Rua"
              required
              data-input 
              autocomplete="off"
            />
            <label for="username">Username</label>
          </div>

					

          <div class="col-12 col-sm-6 form-floating">
            <input
              type="text"
              class="form-control shadow-none"
              id="ename"
              name="ename"
              placeholder="Digite o número da residência"
              required
              data-input
            />
            <label for="ename">Nome da Instituição</label>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-12 col-sm-6 mb-3 mb-md-0 form-floating">
            <input
              type="text"
              class="form-control shadow-none"
              id="email"
              name="email"
              placeholder="Digite o complemento"
              data-input
            />
            <label for="email">E-mail</label>
          </div>
          <div class="col-12 col-sm-6 form-floating">
            <input
              type="password"
              class="form-control shadow-none"
              id="password"
              name="password"
              placeholder="Bairro"
              required
              data-input
            />
            <label for="password">Password</label>
          </div>
        </div>
        <br>
		<div class="row mb-3">
          <div class="col-12 col-sm-6 mb-3 mb-md-0 form-floating">
            <input
              type="text"
              class="form-control shadow-none"
              id="name"
              name="name"
              placeholder="Rua"
              required
              data-input 
              autocomplete="off"
            />
            <label for="name">Nome do Representante</label>
          </div>


          <div class="col-12 col-sm-6 form-floating">
            <input
              type="text"
              class="form-control shadow-none"
              id="emailresp"
              name="emailresp"
              placeholder="Digite o número da residência"
              required
              data-input
            />
            <label for="emailresp">E-mail do Representante</label>
          </div>
        </div>

		<div class="row mb-3">
          <div class="col-12 col-sm-6 mb-3 mb-md-0 form-floating">
            <input
              type="number"
              class="form-control shadow-none"
              id="rg"
              name="rg"
              placeholder="Rua"
              required
              data-input 
              autocomplete="off"
            />
            <label for="rg">RG</label>
          </div>


          <div class="col-12 col-sm-6 form-floating">
            <input
              type="number"
              class="form-control shadow-none"
              id="cpf"
              name="cpf"
              placeholder="Digite o número da residência"
              required
              data-input
            />
            <label for="cpr">CPF</label>
          </div>
        </div>
        </div>


				<div class="d-flex justify-content-center">
          			<button id="save-btn" type="submit" name="submit" value="Cadastre-se" class="btn btn-primary" required>
            		Cadastrar
          			</button>
        		</div>

				<br>
				<div class="d-flex justify-content-center">
					Já é nosso cliente? <a href="index.php"> Entre aqui!</a>
				</div>
        </div>
      </div>


      </form>
    </div>
	</form>
	</div>
	<?php } ?>
</body>
</html>