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
		<h2 class="align-center">Dado deletado</h2>
		<hr>
		<?php
			include_once("conexao.php");

			$id = $_GET['id'];
			$sql = mysqli_query($conexao,"select * from funcionario where id = $id");
			while($dados=mysqli_fetch_assoc($sql)){
		       echo "O <strong>" .$dados['nome']. "</strong> foi deletador com sucesso!";
		    }
			$query = "DELETE FROM funcionario WHERE id = $id";
			$executa_query=mysqli_query($conexao,$query);

		?>
	</div>
	<a class="btn btn-success mt-3" href="show.php">Voltar</a>
</body>
</html>
