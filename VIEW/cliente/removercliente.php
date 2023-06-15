<?php
    include_once '../../BLL/bllcliente.php';

    $cod_cliente = $_GET['cod_cliente'];

   $bll = new \BLL\bllcliente(); 
   $bll->Delete($cod_cliente); 
   
   header("location: listarcliente.php");
  
?>