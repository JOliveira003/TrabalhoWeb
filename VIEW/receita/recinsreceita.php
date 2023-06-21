<?php
include_once 'D:\xampp\htdocs\trabalhoweb\MODEL\receita.php';
include_once 'D:\xampp\htdocs\trabalhoweb\BLL\bllreceita.php';
if (isset($_POST['cod_produto']) && isset($_POST['cod_farmaceutico']) && isset($_POST['cod_cliente']) && isset($_POST['valor'])) {
    $receita = new \MODEL\receita(); 
    
    $receita->setCod_produto($_POST['cod_produto']);  
    $receita->setCod_farmaceutico($_POST['cod_farmaceutico']);
    $receita->SetCod_cliente($_POST['cod_cliente']);
    $receita->SetValor($_POST['valor']);

    $bll = new \BLL\bllreceita(); 
    $bll->Insert($receita); 

    header("location: listarreceita.php");
}
?>