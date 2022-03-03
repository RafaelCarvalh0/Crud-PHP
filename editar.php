<?php
$css = 'assets/css/style.css';
require 'config.php';

$info = [];
$id = filter_input(INPUT_GET, 'id');

if ($id) {

    $sql = $pdo->prepare("SELECT * FROM cadastros WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if ($sql->rowCount() > 0) {

        $info = $sql->fetch(PDO::FETCH_ASSOC);
    
    } 
    
    else {
        header("Location: index.php");
        exit;
    }

} 

else {
    header("Location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= $css; ?>" type="text/css">
    <title>Editar Usuário</title>

</head>

<body>

    <div class="container-fluid">

        <h2>Alterar Cadastro</h2>
        <hr>

        <div class="row">

            <div id="esquerda" class="col col-md-12">

                <form action="editar_action.php" method="post">

                    <input type="hidden" name="id" value="<?=$info['id']; ?>">

                    <label for="">Nome:</label> <br>
                    <input name="nome" type="text" value="<?=$info['nome']; ?>"> <br> <br>

                    <label for="">Idade:</label> <br>
                    <input name="idade" type="number" value="<?=$info['idade']; ?>"> <br> <br>

                    <label for="">Profissão:</label> <br>
                    <input name="profissao" type="text" value="<?=$info['profissao']; ?>"> <br> <br>

                    <input name="cadastrar" id="cadastrar" type="submit" value="Salvar">

                    <a id="botao-voltar" href="visualizar.php">Voltar</a>

                </form>

            </div>

        </div>

    </div>

</body>

</html>