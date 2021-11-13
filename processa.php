<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>cadastro</title>
</head>
<body class="container">
	<div class="mt-2">
		<h2 class="align-center">Dados inseridos</h2>
		<hr>
		<?php
			include_once("conexao.php");
			$nome=$_POST['nome'];
			$idade = $_POST['idade'];
			$salario = $_POST['salario'];
			$data_nascimento = $_POST['data'];
			echo "nome:  $nome<br>";
			echo "idade: $idade<br>";
			echo "salario: $salario<br>";
			echo "data: $data_nascimento<br>";
			$query="INSERT INTO funcionario(nome,idade, salario, data_nascimento) 
			values ('$nome','$idade','$salario','$data_nascimento')";
			$executa_query=mysqli_query($conexao,$query);
		?>
		<p><strong>cadastro feito com sucesso!</strong></p>
		<a href="index.php" class="btn btn-success">Voltar</a>
		<a href="show.php" class='btn btn-secondary'> Visualizar dados </a>
	<div>
</body>
</html>
