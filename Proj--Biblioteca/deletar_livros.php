<?php
error_reporting(0);
ini_set(“display_errors”, 0 );           

require_once('conexao.php');

if (isset($_GET["cod_livro"])){
  $cod_livro=$_GET["cod_livro"];
  $query="DELETE FROM tb_livros WHERE cod_livro=$cod_livro";
  $sql=mysql_query($query);
  
  if ($sql){
	  header("Location:livros.php");
  }
  else{
	echo"<script type=\"text/javascript\">alert('FALHA AO DELETAR ENTRE EM CONTATO COM O ADMINISTRADOR DO SITE');</script>";    
  }
}
?>