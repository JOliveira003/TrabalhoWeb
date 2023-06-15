<?php
    include_once '../../MODEL/cliente.php';
    include_once '../../BLL/bllcliente.php';

   $cliente = new \MODEL\cliente(); 
   
   $cliente->setNome_cliente($_POST['nome']);
   $cliente->setTelefone_cliente($_POST['telefone']); 

   $bll = new \BLL\bllcliente(); 
   $bll->Insert($cliente); 
   
   header("location: listarcliente.php");
  
?>