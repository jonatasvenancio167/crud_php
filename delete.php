<?php
	include_once("conexao.php");

	$id = $_GET['id'];
	$query = "select nome from funcionario where id = $id";
	$sql = mysqli_query($conexao, $query);

	while($dados=mysqli_fetch_assoc($sql)){
       $nome = $dados['nome'];
    }

	$query = "DELETE FROM funcionario WHERE id = $id";
	$executa_query=mysqli_query($conexao,$query);

	echo "<script>alert('O $nome foi deletado com sucesso!'); document.location='show.php'</script>";    

