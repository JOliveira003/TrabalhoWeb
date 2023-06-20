<?php
    include_once '../../MODEL/farmaceutico.php';
    include_once '../../BLL/bllfarmaceutico.php';

   $farmaceutico = new \MODEL\farmaceutico(); 
   
   $farmaceutico->setNome_farmaceutico($_POST['nome']);

   $bll = new \BLL\bllfarmaceutico(); 
   $bll->Insert($farmaceutico); 
   
   header("location: listarfarmaceutico.php");
  
?>