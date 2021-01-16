<?php
include 'conexao.php';

//VAI PEGAR O ID PARA DELETAR
$id = $_GET['id'];

$sql = "DELETE FROM `estoque` WHERE id_estoque = $id";

$deletar = mysqli_query($conexao, $sql);

?>


<!--MENSAGEM DE DELETADO COM SUCESSO-->
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
            <h3>Deletado com Sucesso!</h3>
            <div style="margin-top: 10px;">
                <a href="listar_produtos.php" class="btn btn-sm btn-warning">Voltar</a>
            </div>
            
        </center>
    </div>
    
    <script type="bootstrap/js" src="..//js/bootstrap.js"></script>
</body>
</html>