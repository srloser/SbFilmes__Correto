<?php
require("../config/config.php");

$cat = $_POST['nome'];
$categoria = $_POST['categoria'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];

$destino = 'imagens/' . $_FILES['arquivo']['name'];
 
$arquivo_tmp = $_FILES['arquivo']['tmp_name'];
 
move_uploaded_file( $arquivo_tmp, $destino  );

$sql = "INSERT INTO filmes (nome, id_categoria, preco, descricao, img) VALUES ('$cat', '$categoria', '$preco', '$descricao', '$destino')";
$query = mysqli_query($con, $sql);

if($query){
	header('location: index.php');
}else{
	header('location: cad_filme.php');
}



?>