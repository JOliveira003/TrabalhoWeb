<?php
    include_once '../../BLL/bllproduto.php';

    $cod_produto = $_GET['cod_produto'];

   $bll = new \BLL\bllproduto(); 
   $bll->Delete($cod_produto); 
   
   header("location: listarproduto.php");
  
?>