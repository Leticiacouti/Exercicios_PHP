<?php
//chama o arquivo de conexão ao banco de dados
include('conexao.php');
//declaração das variáveis que receberão os dados do formulário 
$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$senha = $_POST['senha'];
//linha de comando SQL onde executa a ação de alteração da informação solicitada
$sql = "update usuario set nome = '$nome',senha = '$senha' where codigo = $codigo";
mysqli_query($conexao,$sql);

echo "Registro alterado com sucesso!<br>";
echo "<a href='alterar.php'>Voltar</a>";

?>



