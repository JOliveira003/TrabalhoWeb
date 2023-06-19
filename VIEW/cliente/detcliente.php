<?php
include_once 'D:\xampp\htdocs\trabalhoweb\BLL\bllcliente.php';

$cliente = null;

if (isset($_GET['cod_cliente'])) {
    $cod_cliente = $_GET['cod_cliente'];
    if (is_numeric($cod_cliente)) {
        $bll = new \BLL\bllcliente();
        $cliente = $bll->SelectCod_cliente(intval($cod_cliente));
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Cliente</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <?php include_once '../menu.php'; ?>
    <div class="container teal lighten-5 black-text col s12">
        <div class="center orange">
            <h1>Detalhes do Cliente</h1>
        </div>

        <div class="row">
            <div class="input-field col s8">
                <?php if ($cliente !== null) : ?>
                    <label for="id" class="black-text bold">
                        <h5>Cod: <?php echo $cliente->getCod_cliente(); ?></h5>
                    </label>
                    <br>
                    <input type="hidden" name="cod" value=<?php echo $cod_cliente; ?>>
                <?php endif; ?>
            </div>
            <div class="input-field col s8">
                <?php if ($cliente !== null) : ?> 
                    <label for="nome" class="black-text bold">
                        <h5>Nome: <?php echo $cliente->getNome_cliente(); ?></h5>
                    </label>
                    <br><br>
                <?php endif; ?>
            </div>
            <div class="input-field col s8">
                <?php if ($cliente !== null) : ?> 
                    <label for="telefone" class="black-text bold">
                        <h5>Telefone: <?php echo $cliente->getTelefone_cliente(); ?></h5>
                    </label>
                    <br><br>
                <?php endif; ?>
            </div>
        </div>
        <div class="brown lighten-3 center col s12">
            <br>
            <button class="waves-effect waves-light btn orange" type="button" onclick="JavaScript:location.href='edtcliente.php?id=' +
                                     <?php echo $cliente->getId(); ?>">
                Editar <i class="material-icons">edit</i>
            </button>
            <button class="waves-effect waves-light btn red" type="button" onclick="JavaScript: remover(<?php echo $cliente->getId(); ?>);">
                Remover <i class="material-icons">delete_forever</i>
            </button>
            <button class="waves-effect waves-light btn blue" type="button" onclick="JavaScript:location.href='listarcliente.php'">
                Listar <i class="material-icons">list</i>
            </button>
            <br>
            <br>
        </div>
    </div>
    <?php include_once '../footer.php'; ?>
</body>

</html>

<script>
    function remover(id) {
        if (confirm('Excluir o Operador ' + id + '?')) {
            location.href = 'remoperador.php?id=' + id;
        }
    }
</script>