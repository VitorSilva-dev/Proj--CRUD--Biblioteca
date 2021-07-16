<?php

$conexao=mysql_connect("localhost","root","");

$banco_de_dados=mysql_select_db("biblioteca");

if($banco_de_dados){
  //echo "<script>alert('CONECTADO AO BANCO DE DADOS')</script>";
}
else{
  echo "<script>alert('FALHA AO CONECTAR AO BANCO DE DADOS')</script>";
}
?>