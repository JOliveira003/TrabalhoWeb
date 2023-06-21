<?php
    include_once '../../BLL/bllreceita.php';

    $cod_receita = $_GET['cod_receita'];

   $bll = new \BLL\bllreceita(); 
   $bll->Delete($cod_receita); 
   
   header("location: listarreceita.php");
  
?>