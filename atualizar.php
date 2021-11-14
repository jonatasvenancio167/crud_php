<?php
	include_once("conexao.php");

	$id = $_POST['id'];
	$nome=$_POST['nome'];
	$idade = $_POST['idade'];
	$salario = $_POST['salario'];
	$data_nascimento = $_POST['data'];

	$query = "UPDATE funcionario SET nome = '$nome', idade = '$idade', salario = '$salario', data_nascimento = '$data_nascimento' WHERE id = '$id'";

	$executa_query=mysqli_query($conexao,$query) or die("Error");

	echo "<script>alert('Atualizado com sucesso!'); document.location='show.php'</script>";
	// header("Location: show.php");
?>
