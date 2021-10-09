<?php
    include 'conexao.php';

    //variavel   = atribuição['name];
    $nroproduto = $_POST['nroproduto']; //recebe o valor do atributo
    //processo para receber a variavel, receber o name e atribuir o name a variavel
    $nomeproduto = $_POST['nomeproduto'];
    $categoria = $_POST['categoria'];
    $quantidade = $_POST['quantidade'];
    $fornecedor = $_POST['fornecedor']; 

    //echo $fornecedor;
    //ao sempre usar estoque no lugar de curso_estoque


    //criando comando de insersão e atribuindo a variavel $sql
    $sql ="INSERT INTO `estoque`(`nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ($nroproduto,'$nomeproduto','$categoria',$quantidade,'$fornecedor')";
    //e usando aspas simples na sql quando e texto e numero a variavel nao coloca aspas


    //inserindo BD = conectando e dando comando de insersão
    $inserir = mysqli_query($conexao, $sql);

?>

    <!--Mensagem de sucesso!-->
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">

    <div class="container" style="width: 500px;margin-top: 20px;">
        <center>
            <h4>Produto Adicionado com sucesso!</h4>
        </center>
        
        <div style="padding-top: 20px">
            <center>
               <a href="../index.php" role="button" class="btn btn=sm btn-primary">Cadastrar novo Ítem</a> 
            </center>
            
        </div>
        
    </div>