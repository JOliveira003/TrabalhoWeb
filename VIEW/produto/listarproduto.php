<?php

use BLL\bllproduto;

include_once 'D:\xampp\htdocs\trabalhoweb\BLL\bllproduto.php';

if (isset($_GET['busca']))
    $busca = $_GET['busca'];
else
    $busca = null;
$bll = new BLL\bllproduto();

if ($busca == null)
    $listarproduto = $bll->Select();
else
    $listarproduto = $bll->SelectNome_produto($busca);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <title>Listar Produto</title>
</head>

<body>
    <?php include_once '../menu.php' ?>

    <h1>Listar Produto</h1>
    <table class="striped blue lighten-2">
        <tr>
            <th>CODIGO</th>
            <th>NOME</th>
            <th>VALOR</th>
            <th>QUANTIDADE</th>
            <th>
                <a class="btn-floating btn-small waves-effect waves-light green" onclick="JavaScript:location.href='inserirproduto.php'">
                    <i class="material-icons">add</i>
                </a>
            </th>
        </tr>
        <?php
        foreach ($listarproduto as $produto) {
        ?>
            <tr>
                <td><?php echo $produto->getCod_produto(); ?></td>
                <td><?php echo $produto->getNome_produto(); ?></td>
                <td><?php echo $produto->getValor_produto(); ?></td>
                <td><?php echo $produto->getQtde_produto(); ?></td>
                <td>
                    <a class="btn-floating btn-small waves-effect waves-light red" onclick="JavaScript:remover(<?php echo $produto->getCod_produto(); ?>)">
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
    function remover(cod_produto) {
        if (confirm('Excluir o produto ' + cod_produto + '?')) {
            location.href = 'removerproduto.php?cod_produto=' + cod_produto;
        }
    }
</script>