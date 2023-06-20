<?php
    include_once '../../BLL/bllfarmaceutico.php';

    $cod_farmaceutico = $_GET['cod_farmaceutico'];

   $bll = new \BLL\bllfarmaceutico(); 
   $bll->Delete($cod_farmaceutico); 
   
   header("location: listarfarmaceutico.php");
  
?>