<?php
include_once 'D:\xampp\htdocs\trabalhoweb\MODEL\produto.php';
include_once 'D:\xampp\htdocs\trabalhoweb\BLL\bllproduto.php';
if (isset($_POST['nome_produto']) && isset($_POST['valor_produto']) && isset($_POST['qtde_produto'])) {
    $produto = new \MODEL\produto(); 
    
    $produto->setNome_produto($_POST['nome_produto']);
    $produto->setValor_produto($_POST['valor_produto']); 
    $produto->setQtde_produto($_POST['qtde_produto']);

    $bll = new \BLL\bllproduto(); 
    $bll->Insert($produto); 

    header("location: listarproduto.php");
}
?>
