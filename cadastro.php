<?php

require_once 'config.php';

$nome = filter_input(INPUT_POST, 'nome');
$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT);
$profissao = filter_input(INPUT_POST, 'profissao');

print_r($nome . '<br>' . $idade . '<br>' . $profissao);

?>


<?php
if (isset($_POST["cadastrar"])) {

    if (!empty($nome) && !empty($idade) && !empty($profissao)) {

        $inserir = $pdo->prepare("INSERT INTO cadastros (nome, idade, profissao) VALUES (:nome, :idade, :profissao)");

        $inserir->bindValue(':nome', $nome);
        $inserir->bindValue(':idade', $idade);
        $inserir->bindValue(':profissao', $profissao);
        $inserir->execute();

        header("Location: visualizar.php");
        exit;
    }

    header("Location: index.php");

}

if (isset($_POST["visualizar"])) {

    header("Location: visualizar.php");

    /*$alterar = $pdo->prepare("UPDATE cadastros SET nome = :nome, idade = :idade, profissao = :profissao");

    $alterar->bindValue(':nome', $nome);
    $alterar->bindValue(':idade', $idade);
    $alterar->bindValue(':profissao', $profissao);
    $alterar->execute();*/
    

} ?>


<?php
if (isset($_POST["visualizar"])) {

    $sql = $pdo->prepare("SELECT * FROM cadastros");
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $data = $sql->fetchAll(PDO::FETCH_ASSOC);
    } else {
        $data = [];
    }

?>




<?php } ?>