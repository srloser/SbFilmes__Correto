<?php
require("../config/config.php");

$cat = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "INSERT INTO administrador (usuario, senha) VALUES ('$cat', '$senha')";
$query = mysqli_query($con, $sql);

if($query){
	header('location: index.php');
}else{
	header('location: cad_funcionario.php');
}



?>