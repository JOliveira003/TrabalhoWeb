<?php

use BLL\bllcliente;

include_once 'D:\xampp\htdocs\trabalhoweb\BLL\bllcliente.php';

if (isset($_GET['busca']))
    $busca = $_GET['busca'];
else
    $busca = null;

echo "" . $busca . "";

$bll = new BLL\bllcliente();

if ($busca == null)
    $listarcliente = $bll->Select();
else
    $listarcliente = $bll->SelectNome_cliente($busca);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Listar Clientes</title>
</head>

<body>
    <?php include_once '../menu.php' ?>

    <h1>Listar Clientes</h1>
    <table class="striped blue lighten-2">
        <tr>
            <th>CODIGO</th>
            <th>NOME</th>
            <th>TELEFONE</th>
            <th>
                <a class="btn-floating btn-small waves-effect waves-light green" onclick="JavaScript:location.href='inserircliente.php'">
                    <i class="material-icons">add</i>
                </a>
            </th>
        </tr>
        <?php
        foreach ($listarcliente as $cliente) {
        ?>
            <tr>
                <td><?php echo $cliente->getCod_cliente(); ?></td>
                <td><?php echo $cliente->getNome_cliente(); ?></td>
                <td><?php echo $cliente->getTelefone_cliente(); ?></td>
                <td>
                    <a class="btn-floating btn-small waves-effect waves-light orange" onclick="JavaScript:location.href='edtcliente.php?id=' + 
               <?php echo $cliente->getCod_cliente(); ?>">
                        <i class="material-icons">edit</i>
                    </a>
                    <a class="btn-floating btn-small waves-effect waves-light red" onclick="JavaScript:remover(<?php echo $cliente->getCod_cliente(); ?>)">
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
    function remover(cod_cliente) {
        if (confirm('Excluir o cliente ' + cod_cliente + '?')) {
            location.href = 'removercliente.php?cod_cliente=' + cod_cliente;
        }
    }
</script>