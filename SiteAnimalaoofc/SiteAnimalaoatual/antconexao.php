<?php
$hostname= "localhost";
$bancodedados= "mansao";
$usuario= "root";
$senha= "";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);

$consulta = "SELECT * FROM produtos";

$con = $mysqli -> query($consulta) or die ($mysqli -> error);


While($dado = $con -> fetch_array()){ 

    $id = $dado['id'];
    $nome = $dado['nome'];
    $preco = $dado['preco'];
    $imagem = $dado['imagem'];




echo "O id é: " . $id; 
echo "    O nome é: " . $nome; 
echo "    O preço é: " . $preco; 
echo "    A imagem é: " . $imagem;

}

// if($mysqli -> connect_error){
//     echo "falha ao conectar";
// } else {
//     echo "conectado ao banco de dados";
// }

?>