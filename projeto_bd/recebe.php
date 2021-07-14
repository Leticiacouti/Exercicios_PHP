<?php
include('conexao.php');

$produto = $_POST['produto'];
$quantidade = $_POST['quantidade'];

$sql = "insert into tb_produtos(produto,quantidade)values
('$produto','$quantidade')";
mysqli_query($conexao,$sql);

?>



