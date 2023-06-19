<?php
    include_once 'D:\xampp\htdocs\trabalhoweb\MODEL\cliente.php';
    include_once 'D:\xampp\htdocs\trabalhoweb\BLL\bllcliente.php';

   $cliente = new \MODEL\cliente(); 
   
   $cliente->setCod_cliente($_POST['cod_cliente']);
   $cliente->setNome_cliente($_POST['nome']);
   $cliente->setTelefone_cliente($_POST['telefone']);

   $bll = new \BLL\bllcliente(); 
   $bll->Update($cliente); 
   
   header("location: listarcliente.php");
  
?>