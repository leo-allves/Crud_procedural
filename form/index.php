<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Formulário de Cadastro</title>
</head>
<body>
    <div class="container" id="tamanhoContainer">
        <h4>Formulário de Cadastro</h4>
        <!--Quando vamos enviar algo ou declarar informações em variaveis usamos o POST
            Quando vamos editar um produto relacionado a id, mandamos o id na url e então usamos GET para pegar essas informações na url
            Atribuir um valor POST // Pegar um valor GET-->
        <form style="margin-top: 20px;" action="_inserir_produto.php" method="post">
            <div class="form-group">
                <label>Nº Produto</label>
                <input type="number" class="form-control" name="nroproduto" placeholder="Insira o número do produto" required autocomplete="off">    
            </div>

            <div class="form-group">
                <label>Nome Produto</label>
                <input type="text" class="form-control" name="nomeproduto" placeholder="Insira o nome do produto" required autocomplete="off">     
            </div>

            

            <div class="form-group">
                <label>Categoria</label>
                <select class="form-control" name="categoria">
                    <option>Periférico</option>
                    <option>Hardware</option>
                    <option>Software</option>
                    <option>Celulares</option>
                </select>
            </div>

            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" class="form-control" name="quantidade" placeholder="Insira a quantidade do produto" required autocomplete="off">     
            </div>

            <div class="form-group">
                <label>Fornecedor</label> 
                <select class="form-control" name="fornecedor">
                    <option>Fornecedor A</option>
                    <option>Fornecedor B</option>
                    <option>Fornecedor C</option>
                </select>
            </div>
            <!--usamos o botao submit quando queremos enviar alguma coisa-->
            <button type="submit" class="btn btn-secondary btn-sm" id="button_submit">Cadastrar</button>

        </form>
    </div>
    
    <script type="bootstrap/js" src="..//js/bootstrap.js"></script>
</body>
</html>