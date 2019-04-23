<?php
require("config/config.php");

$cat = $_POST['nome'];
$dt_nasc = $_POST['dt_nasc'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$cidade = $_POST['cidade'];
$telefone = $_POST['telefone'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$senha = $_POST['senha'];

$sql = "INSERT INTO cliente (nome, nascimento, rg, cpf, email, cidade, telefone, rua, numero, senha) VALUES ('$cat', '$dt_nasc', '$rg', '$cpf', '$email', '$cidade', '$telefone', '$rua', '$numero', '$senha')";
$query = mysqli_query($con, $sql);

if($query){
	header('location: login.php');
}else{
	header('location: cad_cliente.php');
}



?>