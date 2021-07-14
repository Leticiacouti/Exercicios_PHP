<?php
include('conexao.php');

$nome = $_POST['nome'];
$senha = $_POST['senha'];

$sql = "insert into usuario(nome,senha)values
('$nome','$senha')";
mysqli_query($conexao,$sql);

?>



