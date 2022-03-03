<?php

$css = 'assets/css/style.css';
require_once 'config.php';

$sql = $pdo->prepare("SELECT * FROM cadastros");
$sql->execute();

if ($sql->rowCount() > 0) {
    $data = $sql->fetchAll(PDO::FETCH_ASSOC);
} else {
    $data = [];
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
    <title>Visualizar</title>
</head>

<body>

    <div id="direita" class="container-fluid w-100">

        <div class="table-responsive">

            <div id="link-cadastrar">
                <a href="index.php">Cadastrar Novo Usuário</a>
            </div>

            <table class="table table-hover" border="1" width="100%">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Profissão</th>
                    <th>Açoes</th>
                </tr>
                </thead>
                <?php foreach ($data as $item) : ?>
                    <tr>
                        <td><?= $item['id']; ?></td>
                        <td><?= $item['nome']; ?></td>
                        <td><?= $item['idade']; ?></td>
                        <td><?= $item['profissao']; ?></td>
                        <td id="botoes" style="width: 132px;">
                            <a id="alterar" href="editar.php?id=<?= $item['id']; ?>">Editar</a>
                            <a id="excluir" href="excluir.php?id=<?= $item['id']; ?>">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>

        </div>

    </div>

</body>

</html>