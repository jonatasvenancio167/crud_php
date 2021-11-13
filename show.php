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
		<h2 class="align-center">Visualizar dados</h2>
		<hr>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col"> Identificador </th>
                    <th scope="col"> Nome </th>
                    <th scope="col"> Idade </th>
                    <th scope="col"> Salário </th>
                    <th scope="col"> Data Nascimento </th>
                    <th scope="col"> Ação </th> 
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                        include_once("conexao.php");
                        $banco = mysqli_select_db($conexao);
                        mysqli_set_charset($conexao,'utf8');

                        $sql = mysqli_query($conexao,"select * from funcionario") or die("Erro");
                        while($dados=mysqli_fetch_assoc($sql)){
                            echo "<tr>";
                            echo "<td>".$dados['id']. "</td>";
                            echo "<td>".$dados['nome']. "</td>";
                            echo "<td>". $dados['idade']. " anos</td>";
                            echo "<td id='money'>R$ ". $dados['salario']. "</td>";
                            echo "<td>". $dados['data_nascimento']. "</td>";
                            echo "<td>
                                    <a class='btn btn-danger' href='delete.php?id=".$dados["id"]."'>Delete</a> 
                                    <a class='btn btn-primary' href='editar.php?id=".$dados["id"]."'>editar</a>
                                </td>";
                        }
                    ?>
                </tr>
            </tbody>
        </table>
        <a href="index.php" class="btn btn-success">Voltar</a>
    </div>
</body>
</html>
