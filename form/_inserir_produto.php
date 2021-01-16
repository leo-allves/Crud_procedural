<?php
    //include 'conexao.php'

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
?>