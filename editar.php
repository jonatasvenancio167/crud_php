<?php
    include_once("conexao.php");

    $id = $_GET['id'];
    $query = "SELECT * FROM funcionario WHERE id = $id";
    
    $sql = mysqli_query($conexao, $query) or die("Erro");
    while($dados=mysqli_fetch_assoc($sql)){
        $id = $dados['id'];
        $nome = $dados['nome'];
        $idade = $dados['idade'];
        $salario = $dados['salario'];
        $data_nascimento = $dados['data_nascimento'];
    }
?>

<!doctype html>
<html>
<head>
    <meta charset=latin1>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title> Formulário para inclusão de dados</title>
</head>
<body class="container">
    <div class="mt-2">
        <h2>Editar</h2>
        <hr>
        <form method="POST" action="atualizar.php">
            <input type="hidden" id="id" name="id" value="<?php echo $id ?>">
            <div class="row">
                <div class="col-md-6">
                    <label for=nome>Nome:</label>
                    <input type=text id=nome name=nome value= "<?php echo $nome ?>" placeholder="Digite seu nome" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for=idade> Idade:</label>
                    <input type=number id=idade name=idade value="<?php echo $idade ?>" placeholder="Digite sua idade" class="form-control">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <label for=salario> Salario:</label>
                    <input type=number id=salario name=salario step="0.01" value="<?php echo $salario ?>" placeholder="Digite seu salario" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for=data> Data Nascimento:</label>
                    <input type=date id=data name=data value="<?php echo $data_nascimento ?>" placeholder="Digite sua data de nascimento" class="form-control">
                </div>
            </div>
            <input type=submit class="btn btn-success mt-4" value="atualizar dados">
            <a class="btn btn-secondary mt-4" href="show.php">Visualizar dados</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
