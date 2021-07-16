<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-sm navbar-link bg-link justify-content-between">
	<a class="navbar-brand"  href="home.php">Home</a>
	<ul  class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" href="livros.php">Livros</a>
		</li>
	</ul>			

	<ul  class="navbar-nav ">
		<li class="nav-item">
			<a class="nav-link" href="logout.php">Sair</a>
		</li>  
	</ul> 
</nav>  
	
<?php
error_reporting(0);
ini_set(“display_errors”, 0);       

require_once('conexao.php');

$query_select_livros="SELECT tb_livros.cod_livro,tb_livros.titulo,tb_livros.autor,tb_livros.sinopse,tb_livros.tipo,tb_livros.cod_isbn,tb_livros.foto FROM tb_livros ";
$sql_select_livros=mysql_query($query_select_livros);

$sql_select_livros=mysql_query($query_select_livros);

if ($sql_select_livros == false){
	echo "<script>alert('FALHA AO CONSULTAR A TABELA')</script>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lista de Livros</title>
</head>
<body>
	<table>
	<br/>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col">
					<div class="d-grid gap-2">
						<button class="btn btn-primary" type="button" style="background-color:maroon; border-color:maroon" onclick="window.location='inserir_livros.php'"><strong>Cadastrar Novo Livro</strong></button>							
					</div>
					<table class="table table-link table-hover">
						<tr>
							<th id="celula1">Código do Livro:</th>  
							<th id="celula1">Título:</th>  
							<th id="celula1">Autor:</th>
							<th id="celula1">Sinopse:</th>						
							<th id="celula1">Tipo:</th>  
							<th id="celula1">Código da ISBN:</th>  
							<th id="celula1">Foto:</th>    
							<th id="celula1">Ações:</th>					 
						</tr>

						<?php  			  
						if (mysql_num_rows($sql_select_livros) > 0){
							while ($array_select_livros=mysql_fetch_array($sql_select_livros)){
								$cod_livro=$array_select_livros["cod_livro"];
								$titulo=$array_select_livros["titulo"];
								$autor=$array_select_livros["autor"];
								$sinopse=$array_select_livros["sinopse"];
								$tipo=$array_select_livros["tipo"];
								$cod_isbn=$array_select_livros["cod_isbn"];
								$foto=$array_select_livros["foto"];
								
						 		echo "
									<tr>
										<td>$cod_livro</td>
										<td>$titulo</td>
										<td>$autor</td>
										<td>$sinopse</td>
										<td>$tipo</td>
										<td>$cod_isbn</td>
										<td><img src='imagens/$foto' width='200px' heigth='200xp'></td>
									"; 
							
								echo "
										<td><a href=\"editar_livros.php?cod_livro=$cod_livro\">Editar</a></td>
										<td><a href=\"deletar_livros.php?cod_livro=$cod_livro\">Deletar</a></td>
						  			</tr>";
							}
						}

						?>

				</div>
			</div>
		</div>
	</table>
	
	<style>
		body{
			background-color:#ffffff;
		}
	</style>
	
</body>
</html>