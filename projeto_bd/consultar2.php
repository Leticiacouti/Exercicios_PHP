<?php
include('conexao.php');

$sql = mysqli_query($conexao, "SELECT * FROM tb_contatos") or die( 
  mysqli_error($conexao) //caso haja um erro na consulta 
);
 
//pecorrendo os registros da consulta. 
while($aux = mysqli_fetch_assoc($sql)) { 
  echo "-----------------------------------------<br />"; 
  echo "Nome:".$aux["nome"]."<br />"; 
  echo "Email:".$aux["email"]."<br />"; 
}

?>



