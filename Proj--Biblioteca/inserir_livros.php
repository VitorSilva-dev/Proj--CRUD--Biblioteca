<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

<?php
error_reporting(0);
ini_set(“display_errors”, 0 );           

require_once('conexao.php');

$cod_verifica=0;
$COD=0;

if (isset($_GET["inserir"])){
    $query_select_livros="SELECT * FROM tb_livros";
    $sql_select_livros=mysql_query($query_select_livros); 
 
	$cod_livro=$_GET["cod_livro"];
	$titulo=$_GET["titulo"];
	$autor=$_GET["autor"];
	$sinopse=$_GET["sinopse"];
	$tipo=$_GET["tipo"];
	$cod_isbn=$_GET["cod_isbn"];
	$foto=$_GET["foto"];
		
	if (mysql_num_rows($sql_select_livros) > 0){
		while ($array_select_livros=mysql_fetch_array($sql_select_livros)){
			$cod_isbn1=$array_select_livros["cod_isbn"];
			if ($cod_isbn1==$cod_isbn)
				$cod_verifica=$cod_verifica+1;		
		}		
	}	
	
	if ($cod_verifica>=1){
	   echo"<script type=\"text/javascript\">alert('Atenção! Livro já cadastrado. ');</script>";    
	   $COD=1;
    }   

	if ($COD==0){
		$query_inserir_livros="INSERT INTO tb_livros (cod_livro,titulo,autor,sinopse,tipo,cod_isbn,foto) VALUES (NULL,'$titulo','$autor','$sinopse','$tipo','$cod_isbn','$foto')";		
	 	$sql_inserir_livros=mysql_query($query_inserir_livros); 
	 
	    if ($sql_inserir_livros) 
			echo "<script>alert('Livro Cadastrado com Sucesso!')</script>";
		else
			echo "<script>alert('Falha ao Cadastrar o Livro')</script>";	
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cadastro de livros</title>
</head>
<body>
	
	<h3 style="margin-left:500">Cadastrar Livro</h3>
	<ul>
		<a href="livros.php" style="margin-left:500; color:#0000ff">Mostrar Livros Cadastrados</a>
	</ul>

	<form id="form_Livro" style="margin-left:500" name="form_Livro" method="GET" action="" enctype="multipart/form-data">
		
	<div  class="container">
		<div class="row align-items-start">			
			<div class="col-sm-4">
				<label for="titulo" class="form-label">Título</label><br/>
				<input type="text" style="border-radius:10px" name="titulo" id="titulo" placeholder="Digite o Título" />
			</div>			
			
			<div class="col align-self-center">
				<label for="autor" class="form-label">Autor</label><br/>
				<input type="text"style="border-radius:10px" name="autor" id="autor" placeholder="Digite o Autor"><br/>
			</div>			
		</div>
		<br/>
			
		<div class="row align-items-center">
			<div class="col-sm-4">
				<label for="sinopse" class="form-label">Sinopse</label><br/>
				<input type="text"style="border-radius:10px" name="sinopse" id="sinopse"  placeholder="Digite a Sinopse" required="required"/>
			</div>	
			
			<div class="col align-self-center">			
				<label for="cod_isbn" class="form-label">Código do ISBN</label><br/>
				<input type="text"style="border-radius:10px" name="cod_isbn" id="cod_isbn" placeholder="Digite o Código do ISBN" required="required" />
			</div>
		</div>
		<br/>
			
		<div class="row align-items-center">
			<div class="col-sm-6">
				<label for="tipo" class="form-label">Tipo:</label><br/>0 - Capa dura<br/>1 - Capa cartonada<br/><br/>
    			<select style="border-radius:10px" name="tipo" id="tipo" class="form-select">
					<option selected="Capa dura">0</option>
					<option selected="Capa cartonada">1</option>
				</select>
    			<br/>

				<label for="foto">Upload de Foto</label><br/>
    			<input type="file" name="foto" id="foto"/>
    		</div>
		</div>
		<br/>
	</div>
		
	

	<br/>
	<input type="submit" style="border-radius:10px; background-color:#FFFFFF" name="inserir" id="inserir" value="Inserir" />
		  
	<style>
		body {
			background-color:#ffffff;
			color:#0000ff;
		}
	</style>
	
</body>
</html>