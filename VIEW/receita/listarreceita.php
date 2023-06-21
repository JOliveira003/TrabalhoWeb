<?php

use BLL\bllreceita;

include_once 'D:\xampp\htdocs\trabalhoweb\BLL\bllreceita.php';

if (isset($_GET['busca']))
    $busca = $_GET['busca'];
else
    $busca = null;
$bll = new BLL\bllreceita();

if ($busca == null)
    $listarreceita = $bll->Select();
else
    $listarreceita = $bll->SelectCod_receita($busca);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <title>Listar Receita</title>
</head>

<body>
    <?php include_once '../menu.php' ?>

    <h1>Listar Receita</h1>
    <table class="striped blue lighten-2">
        <tr>
            <th>CODIGO RECEITA</th>
            <th>CODIGO PRODUTO</th>
            <th>CODIGO FARMACEUTICO</th>
            <th>CODIGO CLIENTE</th>
            <th>VALOR</th>
            <th>
                <a class="btn-floating btn-small waves-effect waves-light green" onclick="JavaScript:location.href='inserirreceita.php'">
                    <i class="material-icons">add</i>
                </a>
            </th>
        </tr>
        <?php
        foreach ($listarreceita as $receita) {
        ?>
            <tr>
                <td><?php echo $receita->getCod_receita(); ?></td>
                <td><?php echo $receita->getCod_produto(); ?></td>
                <td><?php echo $receita->getCod_farmaceutico(); ?></td>
                <td><?php echo $receita->getCod_cliente(); ?></td>
                <td><?php echo $receita->getValor(); ?></td>
                <td>
                
                    <a class="btn-floating btn-small waves-effect waves-light red" onclick="JavaScript:remover(<?php echo $receita->getCod_receita(); ?>)">
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
    function remover(cod_receita) {
        if (confirm('Excluir o receita ' + cod_receita + '?')) {
            location.href = 'removerreceita.php?cod_receita=' + cod_receita;
        }
    }
</script>