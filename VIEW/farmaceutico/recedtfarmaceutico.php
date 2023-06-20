<?php
    include_once 'D:\xampp\htdocs\trabalhoweb\MODEL\farmaceutico.php';
    include_once 'D:\xampp\htdocs\trabalhoweb\BLL\bllfarmaceutico.php';

   $farmaceutico = new \MODEL\farmaceutico(); 
   
   $farmaceutico->setCod_farmaceutico($_POST['cod_farmaceutico']);
   $farmaceutico->setNome_farmaceutico($_POST['nome']);

   $bll = new \BLL\bllfarmaceutico(); 
   $bll->Update($farmaceutico); 
   
   header("location: listarfarmaceutico.php");
  
?>