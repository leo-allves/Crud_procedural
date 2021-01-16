<?php

include 'conexao.php';
//CRIANDO O UPDATE
//VAMOS RECEBER VIA POST TUDO QUE SERA ALTERADO
//E AQUI NESTE PONTO QUI NO FORMULARIO PRECISARA DO INPUTE TYPE=HIDDEN

$id = $_POST['id'];  //este id aqui vem do name 
//$nroproduto = $_POST['nroproduto'];
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

//criar variavel sql comando
//está fazendo update na tabela estoque e ele vai setar os novos parametros
$sql = "UPDATE `estoque` SET `nomeproduto`='$nomeproduto',`categoria`='$categoria',`quantidade`= $quantidade,`fornecedor`='$fornecedor' WHERE id_estoque = $id";
//id_estoque e auto_icremento por isso não é alterado, nroproduto tbm não por a alteração esta em desabled 

$atualizar = mysqli_query($conexao, $sql);


?>
<!--botao para retornar -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <div class="container" style="width:400px;margin-top:20px;"> 
        <center>
            <h3>Atualizado com sucesso!</h3>
            <div style="margin-top: 10px;">
                <a href="listar_produtos.php" class="btn btn-sm btn-warning">Voltar</a>
            </div>
            
        </center>
    </div>
    
    <script type="bootstrap/js" src="..//js/bootstrap.js"></script>
</body>
</html>