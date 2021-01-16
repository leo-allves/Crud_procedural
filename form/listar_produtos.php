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
    
    <div class="container" style="margin-top:40px">
    <h3>Lista de Produtos</h3><br>


<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">Nº Produto</th>
      <th scope="col">Nome Produto</th>
      <th scope="col">Categoria</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Fornecedor</th>
    </tr>
  </thead> 
        <!--Sempre usamos While para percorrer a tabela-->
        <?php
            include 'conexao.php';
            //consultando todos os produtos de uma tabela
            $sql = "SELECT * FROM `estoque`";
            $busca = mysqli_query($conexao, $sql);
            //criar um laço de repetição para listar todos os produtos
            //cada linha que a nossa consulta achar ele vai trazer.
            while ($array = mysqli_fetch_array($busca)) {
                //para listar preciso do id de cada produto mesmo que ele não apareça
                //o while vai passar e trazer o primeiro produto listar o primeiro e assim ate percorrer todas as informações de 1 em 1
                $id_estoque =$array['id_estoque'];
                $nroproduto = $array['nroproduto'];
                $nomeproduto = $array['nomeproduto'];
                $categoria = $array['categoria'];
                $quantidade = $array['quantidade'];
                $fornecedor = $array['fornecedor'];

            ?>
        <tr>
            <td><?php echo $nroproduto ?></td>
            <td><?php echo $nomeproduto ?></td>
            <td><?php echo $categoria ?></td>
            <td><?php echo $quantidade ?></td>
            <td><?php echo $fornecedor ?></td>
        </tr>


    <?php } ?>  <!--o fechamento da tag deve aqui pois se nao ele não listara um por um ate o ultimo -->

    </tr>
</table>
    
    


    <script type="bootstrap/js" src="..//js/bootstrap.js"></script>

</body>
</html>