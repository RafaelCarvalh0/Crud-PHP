<?php

require_once 'config.php';

$id = filter_input(INPUT_GET, 'id');

$sql = $pdo->prepare("DELETE FROM cadastros WHERE id = :id") or die($pdo->error);
$sql->bindValue('id', $id);
$sql->execute();

error_reporting();
header('Location: visualizar.php');