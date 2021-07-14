<?php
include('conexao.php');
//Cria uma tabela para ilustrar a consulta
echo "<table border='1'>
<th>Nome</th><th>Senha</th></table>";

$resultado = $conexao->query("select *from usuario");
while($row = $resultado->fetch_row()){
echo"<table border='1'>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]<td></tr>";
echo "</table>";

}

?>