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
    <link rel="stylesheet" href="../css/style.css">
    <script src="https:kit.fontawesome.com/8786c39b09.js"></script>
    <title>Formulário de Cadastro</title>
</head>
<body>
    
    <div class="container" style="margin-top:40px">
    <h3>Lista de Produtos</h3><br>


<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nº Produto</th>
      <th scope="col">Nome Produto</th>
      <th scope="col">Categoria</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Fornecedor</th>
      <th scope="col">Ação</th>
    </tr>
  </thead> 
        <!--Sempre usamos While para percorrer a tabela-->
        <?php
            include 'conexao.php';
            //consultando todos os produtos de uma tabela
            $sql = 'SELECT * FROM `estoque`';
            $busca = mysqli_query($conexao, $sql);
            //criar um laço de repetição para listar todos os produtos
            //cada linha que a nossa consulta achar ele vai trazer.
            while ($array = mysqli_fetch_array($busca)) {
                //para listar preciso do id de cada produto mesmo que ele não apareça
                //o while vai passar e trazer o primeiro produto listar o primeiro e assim ate percorrer todas as informações de 1 em 1
                $id_estoque = $array['id_estoque'];
                $nroproduto = $array['nroproduto'];
                $nomeproduto = $array['nomeproduto'];
                $categoria = $array['categoria'];
                $quantidade = $array['quantidade'];
                $fornecedor = $array['fornecedor']; ?>
        <tr>
            <td><?php echo $id_estoque; ?></td>
            <td><?php echo $nroproduto; ?></td>
            <td><?php echo $nomeproduto; ?></td>
            <td><?php echo $categoria; ?></td>
            <td><?php echo $quantidade; ?></td>
            <td><?php echo $fornecedor; ?></td>
            <td>
                <!--<button type="button" class="btn btn-warning btn-sm" style="color: #fff;" href="#" ><i class="far fa-edit"></i>&nbsp;Editar</button>-->
                <a type="button" class="btn btn-warning btn-sm" href="editar_produto.php?id=<?php echo $id_estoque; ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>
                
                <a type="button" class="btn btn-danger btn-sm" href="deletar_produto.php?id=<?php echo $id_estoque; ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>
            </td>
        </tr>
    <?php
            } ?>  <!--o fechamento da tag deve aqui pois se nao ele não listara um por um ate o ultimo -->

    </tr>
</table>
 <div style="text-align:right;">
        <!--botão para retornar ao menu-->
    <a href="../index.php" role="button" class="btn btn-info btn-sm" >Voltar</a>

 </div>
</body>
</html>