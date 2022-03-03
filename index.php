<?php
$css = 'assets/css/style.css';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= $css; ?>" type="text/css">
    <title>Cadastro de Pessoas</title>

</head>

<body>

    <div class="container-fluid">

        <h2>Cadastro</h2>
        <hr>

        <div class="row">

            <div id="esquerda" class="col col-md-12">

                <form action="cadastro.php" method="post">
                    <label for="">Nome:</label> <br>
                    <input name="nome" type="text"> <br> <br>

                    <label for="">Idade:</label> <br>
                    <input name="idade" type="number"> <br> <br>

                    <label for="">Profissão:</label> <br>
                    <input name="profissao" type="text"> <br> <br>

                    <input name="cadastrar" id="cadastrar" type="submit" value="Cadastrar">

                    <input name="visualizar" id="visualizar" type="submit" value="Visualizar">

                </form>

            </div>

        </div>

    </div>

</body>

</html>