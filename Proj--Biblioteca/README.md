# Projeto CRUD Biblioteca (com PHP e MySQL)

## Como funciona? 

O sistema funciona da seguinte maneira, após a conexão ser bem sucedida, passando pelo arquivo "conexao.php", o usuário poderá ter contato com cinco telas dentro do sistema. O primeiro arquivo executado após a conexão bem sucedida, é o "index.php", que é básicamente uma tela com uma foto da biblioteca de fundo, e com a opção de entrar.

Após entrar, o arquivo "home.php" será exibido, tela essa que possuí um carrossel com mais imagens da biblioteca. Além da barra de navegação entre telas na parte superior (navegação essa presente também no arquivo "livros.php"). Ao clicar na opção "Livros", o usuário será direcionado para uma tabela, dentro do arquivo "livros.php", mostrando todos os livros já cadastrados, além das opções de poder cadastrar um novo livro, e deletar ou editar um livro já cadastrado. 

A opção "Cadastrar Novo Livro", leva a tela de cadastro, no arquivo "inserir_livro.php", onde todas as informações a respeito do livro devem ser inseridas e salvas. Já a opção "Editar" tem a função de redirecionar para uma tela similar a de cadastro, no arquivo "editar_livros.php", com o propósito de alterar algum dado de um livro cadastrado. E a última opção na tela "livros.php", é a "Deletar", que como o próprio nome diz é resposável por apagar um livro já cadastrado no banco de dados. Ela não possui tela, porém invoca o arquivo "deletar_livros.php", para ser executada. 

O último arquivo ainda não citado é o "logout.php", que é invocado quando a opção "Sair" é clicada. Ele básicamente volta para tela inicial (index.php) e destrói a última sessão de usuário acessada. 

----

## O que foi usado durante o desenvolvimento?


- Editor de código: Visual Studio Code.
- Servidor e Banco de dados: Xampp. A partir dele pude acessar o Apache como servidor e o phpMyAdmin (MySQL) como banco de dados. A pasta com todos os arquivos necessários do Xampp está disponibilizada no meu Google Drive, caso queira usá-lo também. 

----

## Como funciona o Xampp? 

1. Se optar por utilizar a pasta do meu Drive, é preciso que execute o arquivo "xampp-control.exe", após ele aberto irá selecionar a opção "Start" para o "Apache" e o "MySQL". 

2. Selecione "Admin" para o MySQL, importe o arquivo "biblioteca.sql" e o execute para criar o banco de dados. 

3. Mova a pasta "Proj--Biblioteca" inteira para "...\xampp\htdocs\PROJETO_PHP".

4. Selecione "Admin" para o Apache, e entre na pasta "Proj--Biblioteca". 

- Caso não use a pasta do Drive, tenha algum problema ao utilizar o Xampp ou queira instalar o Xampp mais atual, sugiro que pesquise por videos de tutoriais ou por artigos.

- Pasta no Google Drive: https://drive.google.com/drive/folders/1cN-B-3w872XphAkXH66L6rePZpDj8665?usp=sharing