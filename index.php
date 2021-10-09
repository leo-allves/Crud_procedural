<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Formulário de Cadastro</title>
</head>
<body>
    <div class="container"  style="margin-top:100px;">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Adicionar Produto</h5>
                            <p class="card-text">Opção para adicionar produto em nosso estoque.</p>
                            <a href="./form/adicionar_produto.php" class="btn btn-info btn-sm">Cadastrar Produto</a>    
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Lista de Produtos</h5>
                            <p class="card-text">Opção para pesquisar, editar e excluir os produtos.</p>
                            <a href="./form/listar_produtos.php" class="btn btn-info btn-sm"> Pesquisar Produtos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script type="bootstrap/js" src="..//js/bootstrap.js"></script>
</body>
</html>