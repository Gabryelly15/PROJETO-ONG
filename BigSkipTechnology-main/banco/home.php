<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Home</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>	

	<script>
		
		
		function buscar(){
			var json = {};
			json.acao = "buscar";			
			$.ajax({
				url: "info.php",
				data: json,
				type: "get",
				success: function(resp){
					//console.log(resp);
					var meuJson = JSON.parse(resp);
					var linhas = "";
					for(i=0;i<meuJson.length;i++){
						linhas += meuJson[i].userid + " " +  "-" + " " +  meuJson[i].username + " " +  "-" + " " + meuJson[i].ename + " " +  "-" + " " + meuJson[i].name + "<br>";
					}
					document.getElementById("resultado").innerHTML = linhas;
				}
			});			
		}
		
		
	</script>
</head>
<body>
	<div class="nav">
		<div class="logo">
			<p><a href="index.html">BigSkip Technology</a></p>
		</div>
		
		<div class="right-links">

			<a href="php/logout.php"> <button class="btn">Logout</button></a>
		</div>
	</div>
	
	<div class="container">
	  <div class="row">
		<div class="col">		  
		</div>
		<div class="col">
			
			<form>
			  <div class="mb-3">
				<label for="userid" class="form-label">Userid</label>
				<input type="text" class="form-control" id="userid">				
			  </div>
			  <div class="mb-3">
				<label for="username" class="form-label">Username</label>
				<input type="text" class="form-control" id="username">
			  </div>
			  <div class="mb-3">
				<label for="ename" class="form-label">Nome da instituição</label>
				<input type="text" class="form-control" id="ename">
			  </div>
			  <div class="mb-3">
				<label for="name" class="form-label">Nome do representante</label>
				<input type="text" class="form-control" id="name">
			  </div>
			  <br>
			  
			  <button type="button" class="btn btn-primary" onclick="buscar()">
				Buscar
			   </button>	
			  <br><br>
 
			  <span id="resultado">
 
			  </span>
 
			</form>
 
		
		</div>
		<div class="col">		  
		</div>
	  </div>
	</div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>