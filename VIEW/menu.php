<?php
  session_start(); 
   if (!isset($_SESSION['login']))
       Header("Location: ../index.php");   
?> 

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Sistema de Farmacia</title>
</head>

<body style="background-color: #b2ebf2;">
    <nav>
        <div class="nav-wrapper cyan darken-2">
            <a href="#" class="brand-logo right">
                <img src="../VIEW/imagens/iconefarmacia.png"  width="60" height="65">
            </a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="\trabalhoweb\VIEW\cliente\listarcliente.php">Cliente</a></li>
                <li><a href="../farmaceutico/listarfarmaceutico.php">Farmaceutico</a></li>
                <li><a href="\trabalhoweb\VIEW\produto\listarproduto.php">Produto</a></li>
                <li><a href="/trabalhoweb/VIEW/receita/listarreceita.php">Receita</a></li>
                <li><a href="\TrabalhoWeb\VIEW\logout.php">Logout</a></li>
            </ul>
        </div>
    </nav>
</body>
</html>