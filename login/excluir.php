<?php
include('conexao.php');
$codigo = $_POST['codigo'];

$sql = "delete from usuario where codigo = $codigo";
mysqli_query($conexao,$sql);
echo "Registro excluído com sucesso!!<br>";
echo "<a href='excluir_cadastro.php'>Voltar</a>";

?>



