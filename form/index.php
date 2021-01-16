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
        <form style="margin-top: 20px;" action="" method="post">
            <div class="form-group">
                <label>Nº Produto</label>
                <input type="number" class="form-control" placeholder="Insira o número do produto">     
            </div>

            <div class="form-group">
                <label>Nome Produto</label>
                <input type="text" class="form-control" placeholder="Insira o nome do produto">     
            </div>

            

            <div class="form-group">
                <label>Categoria</label>
                <select class="form-control">
                    <option>Periferico</option>
                    <option>Hardware</option>
                    <option>Software</option>
                    <option>Celulares</option>
                </select>
            </div>

            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" class="form-control" placeholder="Insira a quantidade do produto">     
            </div>

            <div class="form-group">
                <label>Fornecedor</label>
                <select class="form-control">
                    <option>Forncedor A</option>
                    <option>Forncedor B</option>
                    <option>Forncedor C</option>
                </select>
            </div>

            <button type="submit" class="btn btn-secondary btn-sm" id="button_submit">Cadastrar</button>

        </form>
    </div>
    

</body>
</html>