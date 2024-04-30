<?php
 
$acao = $_GET["acao"];
 
$servidor = "localhost";
$username = "root";
$password = "";
$database = "banco";
 
$con = mysqli_connect($servidor,$username,$password,$database);
 
$sql = "";
$msg = "";
 
if ($acao=="buscar"){
	$sql = "select * from users";
	$result = mysqli_query($con, $sql);
	$linhas = array();
	while ($linha = mysqli_fetch_assoc($result)){
		$linhas[] = $linha;
	}
	echo json_encode($linhas);
 
}else{
	mysqli_query($con, $sql);
	if (mysqli_affected_rows($con)>0){
		echo $msg;
	}else{
		echo "Não foi possível executar a operação!";
	}
}
 
mysqli_close($con);
?>