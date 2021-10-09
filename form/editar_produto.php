<?php

include "conexao.php";
//Foi referenciado no botão na tabela o id 
//Vamos pegar esse valor então atraves da url com o GET
$id = $_GET['id'];



?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>Formulário de Cadastro</title>
</head>
<body>
    <div class="container" id="tamanhoContainer">
        <h4>Formulário de Cadastro</h4>
        <!--Quando vamos enviar algo ou declarar informações em variaveis usamos o POST
            Quando vamos editar um produto relacionado a id, mandamos o id na url e então usamos GET para pegar essas informações na url
            Atribuir um valor POST // Pegar um valor GET-->
        <form style="margin-top: 20px;" action="_atualizar_produto.php" method="post">
            <?php 
                //SELECT aqui ele vai listar tudo que tem o id para consulta
                $sql = "SELECT * FROM `estoque` WHERE id_estoque =$id";
                $buscar = mysqli_query($conexao, $sql);
                while($array = mysqli_fetch_array($buscar)) {
                
                    $id_estoque =$array['id_estoque'];
                    $nroproduto = $array['nroproduto'];
                    $nomeproduto = $array['nomeproduto'];
                    $categoria = $array['categoria'];
                    $quantidade = $array['quantidade'];
                    $fornecedor = $array['fornecedor'];
            
            ?>
                <div class="form-group">
                    <label>Nº Produto</label>
                    <input type="number" class="form-control" name="nroproduto" value="<?php echo $nroproduto ?>" disabled>
                    <input type="number" class="form-control" name="id" value="<?php echo $id ?>"  style="display: none">  <!-- tbm pode se usar o hidden -->   
                </div>

                <div class="form-group">
                    <label>Nome Produto</label>
                    <input type="text" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto ?>">     
                </div>

                

                <div class="form-group">
                    <label>Categoria</label>
                    <select class="form-control" name="categoria" value="<?php echo $categoria ?>">
                        <option>Periférico</option>
                        <option>Hardware</option>
                        <option>Software</option>
                        <option>Celulares</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Quantidade</label>
                    <input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade ?>">     
                </div>

                <div class="form-group">
                    <label>Fornecedor</label> 
                    <select class="form-control" name="fornecedor" value="<?php echo $fornecedor?>">
                        <option>Fornecedor A</option>
                        <option>Fornecedor B</option>
                        <option>Fornecedor C</option>
                    </select>
                </div>
                <!--usamos o botao submit quando queremos enviar alguma coisa-->
                <button type="submit" class="btn btn-secondary btn-sm" id="button_submit">Atualizar</button>
            <!--fechando o while-->
            <?php } ?>
        </form>
    </div>
    
    <script type="bootstrap/js" src="..//js/bootstrap.js"></script>
</body>
</html>