<?php
include('conexao.php');
 
// declaração de variáveis
$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$senha =$_POST['senha'];
 
$sql ="UPDATE usuario SET nome='$nome',senha='$senha' where codigo ='$codigo'";
        mysqli_query($conexao,$sql);
     }
  


?>




