<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"> </script>
    <script type="text/javascript" src="../js/init.js"></script>


    <title>Inserir Novo Farmaceutico</title>
</head>

<body>
    <?php
    include_once '../menu.php';
    include_once  'D:\xampp\htdocs\trabalhoweb\BLL\bllfarmaceutico.php';
    ?>
    <div class="container indigo lighten-3 black-text col s12">
        <div class="center grey col s12">
            <h1>Inserir Novo Farmaceutico</h1>
        </div>
        <div class="row">
            <form action="recinsfarmaceutico.php" method="POST" id="frmInsfarmaceutico" name="frmInsfarmaceutico" class="col s12">

                <div class="input-field col s8">
                    <label for="nome" class="black-text bold">Informe o Nome:</label>
                    <input id="nome" name="nome" type="text">
                </div>
                <div class="grey darken-2 center col s12">
                    <br />
                    <button class="btn waves-effect waves-light green" type="submit" name="btnEnviar">Gravar
                        <i class="material-icons right">save</i>
                    </button>
                    <button class="btn waves-effect waves-light red" type="reset" name="btnLimpar">Limpar
                        <i class="material-icons right">clear_all</i>
                    </button>
                    <br />
                    <br />
                </div>
            </form>
        </div>
    </div>
    <br>
    <br>
</body>
 <?php include_once '../footer.php' ?> 

</html>