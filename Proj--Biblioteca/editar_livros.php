<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

<?php
error_reporting(0);
ini_set(“display_errors”, 0 );           

require_once('conexao.php');
 

if (isset($_GET["cod_livro"])){
	$cod_livro=$_GET["cod_livro"];
}
else if (isset($_POST["cod_livro"])){
	$cod_livro=$_POST["cod_livro"];
}	
else
echo "ERRO";

$query_select_livros_cod="SELECT * FROM tb_livros WHERE cod_livro=$cod_livro";
$sql_select_livros_cod=mysql_query($query_select_livros_cod);
  
if ($sql_select_livros_cod == false){	
	echo "FALHA AO CONSULTAR CONTATO, FAVOR ENTRAR EM CONTATO COM O ADMINISTRADOR";
}
	
while ($array_select_livros_cod=mysql_fetch_array($sql_select_livros_cod)){
	$cod_livro=$array_select_livros_cod["cod_livro"];
	$titulo=$array_select_livros_cod["titulo"];
	$autor=$array_select_livros_cod["autor"];
	$sinopse= $array_select_livros_cod["sinopse"] ;
	$tipo=$array_select_livros_cod['tipo'];
	$cod_isbn=$array_select_livros_cod["cod_isbn"];
	$foto=$array_select_livros_cod["foto"];
}

if (isset($_GET['submit_editar'])){
	$cod_livro=$_GET['cod_livro'];
	$titulo=$_GET['titulo'];
	$autor=$_GET['autor'];
	$sinopse=$_GET['sinopse'];	
    $tipo=$_GET['tipo'];		 
	$cod_isbn=$_GET['cod_isbn'];
	$foto=$_GET['foto'];
		 
	
	$query_update="UPDATE tb_livros SET titulo='$titulo',autor='$autor',sinopse='$sinopse',tipo='$tipo',cod_isbn='$cod_isbn',foto='$foto' WHERE cod_livro='$cod_livro'";
		 
	$sql_update=mysql_query($query_update);	 		
	if ($sql_update == true){
		echo"<script type=\"text/javascript\">alert('DADOS EDITADOS COM SUCESSO');</script>";
		header("Location:livros.php");
	}
	else{
		echo "<script type=\"text/javascript\">alert('FALHA AO EDITAR, ENTRE EM CONTATO COM O ADMINISTRADOR DO SITE');</script>";	 		 		 	 
	}
} 

if (isset($_GET['submit_deletar'])){
  	$cod_livro=$_GET["cod_livro"];
  	$query="DELETE FROM tb_livros WHERE cod_livro=$cod_livro";
  	$sql=mysql_query($query);
  
  	if ($sql){
		header("Location:livros.php");
	}
  	else{
		echo"<script type=\"text/javascript\">alert('FALHA AO DELETAR, ENTRE EM CONTATO COM O ADMINISTRADOR DO SITE');</script>";    
	}
}	    

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edição de Cadastro de Livros</title>

	<style type="text/css">
		.txtarea{
			background-color: #FFFFFF;
			height: 30px;
			width: 250px;	
			border-radius: 10px;
			font-size:18px;
		}
		
		.selecionar {
			background-color: #FFFFFF;
			height: 30px;
			width: 160px;	
			border-radius: 10px;
			font-size: 18px;
		}
	</style>

</head>
<body>

	<h3 style="margin-left:500">Editar Livro<br/></h3>
  	<a href="livros.php" style="color:#0000ff; margin-left:500" onclick="return confirm('Deseja listar os livros?');">Mostrar Livros Cadastrados</a></li> 
 	<br/><br/>
 
	<form id="form_Livro" name="form_Livro" method="get" action="" style="margin-left:500" enctype="multipart/form-data">
		<div  class="container">
			<input type="hidden" name="cod_livro"   value="<?php echo $cod_livro;?>"/>

			<div class="row align-items-start">			
				<div class="col-sm-4">
    				<label for="titulo">Título</label><br/>
    				<input type="text" name="titulo" id="titulo" class="txtarea"  value="<?php echo $titulo;?>"/>
    			</div>
				<br/>

				<div class="col align-self-center">
					<label for="autor">Autor</label><br/>
  					<input type="text" name="autor" id="autor" class="txtarea" value="<?php echo $autor;?>"/>
				</div>
			</div>
			<br/>  

			<div class="row align-items-center">
				<div class="col-sm-4">
    				<label for="sinopse">Sinopse</label><br/>
    				<input type="text" name="sinopse" id="sinopse" class="txtarea" value="<?php echo $sinopse;?>"/>
    			</div>
				<br/> 
	
				<div class="col align-self-center">			
					<label for="cod_isbn" class="form-label">Código do ISBN</label><br/>
					<input type="text"style="border-radius:10px" name="cod_isbn" id="cod_isbn" value="<?php echo $cod_isbn;?>"/>
				</div>
			</div>
			<br/>

			<div class="row align-items-center">
				<div class="col-sm-6">
					<label for="tipo" class="form-label">Tipo</label><br/>0 - Capa dura<br/>1 - Capa cartonada<br/><br/>
    				<select style="border-radius:10px" name="tipo" id="tipo" class="form-select">
						<option selected="Capa dura">0</option>
						<option selected="Capa cartonada">1</option>
					</select>
    				<br/>

					<label for="foto">Upload de Foto</label><br/>
    				<input type="file" name="foto" id="foto" value="<?php echo $foto;?>"/>
    			</div>
			</div>
			<br/>
	
    		<input type="submit" style="border-radius:10px" name="submit_editar" id="editar" value="Gravar"  style="background-color:#FFFFFF" onclick="return confirm('Deseja gravar livro?');"/>
    		<input type="submit" style="border-radius:10px" name="submit_deletar" id="deletar" value="Deletar"  style="background-color:#FFFFFF" onclick="return confirm('Deseja deletar livro?');"/>
			<br/>
		</div>
	</form>

	<style>
		body{
			background-color:#ffffff;
			color:#0000ff;
		}
	</style>

</body>
</html>