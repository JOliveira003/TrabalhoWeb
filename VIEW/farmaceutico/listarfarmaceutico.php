<?php

use BLL\bllfarmaceutico;

include_once 'D:\xampp\htdocs\trabalhoweb\BLL\bllfarmaceutico.php';

if (isset($_GET['busca']))
    $busca = $_GET['busca'];
else
    $busca = null;
$bll = new BLL\bllfarmaceutico();

if ($busca == null)
    $listarfarmaceutico = $bll->Select();
else
    $listarfarmaceutico = $bll->SelectNome_farmaceutico($busca);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <title>Listar Farmaceutico</title>
</head>

<body>
    <?php include_once '../menu.php' ?>

    <h1>Listar Farmaceutico</h1>
    <table class="striped blue lighten-2">
        <tr>
            <th>CODIGO</th>
            <th>NOME</th>
            <th>
                <a class="btn-floating btn-small waves-effect waves-light green" onclick="JavaScript:location.href='inserirfarmaceutico.php'">
                    <i class="material-icons">add</i>
                </a>
            </th>
        </tr>
        <?php
        foreach ($listarfarmaceutico as $farmaceutico) {
        ?>
            <tr>
                <td><?php echo $farmaceutico->getCod_farmaceutico(); ?></td>
                <td><?php echo $farmaceutico->getNome_farmaceutico(); ?></td>
                <td>
                    <a class="btn-floating btn-small waves-effect waves-light orange" onclick="JavaScript:location.href='edtfarmaceutico.php?id=' + 
               <?php echo $farmaceutico->getCod_farmaceutico(); ?>">
                        <i class="material-icons">edit</i>
                    </a>
                    <a class="btn-floating btn-small waves-effect waves-light red" onclick="JavaScript:remover(<?php echo $farmaceutico->getCod_farmaceutico(); ?>)">
                        <i class="material-icons">delete_forever</i>
                    </a>
                </td>
            </tr>
        <?php
        }
        ?>


    </table>

</body>

</html>

<script>
    function remover(cod_farmaceutico) {
        if (confirm('Excluir o farmaceutico ' + cod_farmaceutico + '?')) {
            location.href = 'removerfarmaceutico.php?cod_farmaceutico=' + cod_farmaceutico;
        }
    }
</script>