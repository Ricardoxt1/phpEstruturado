<?php

include_once('../../config.php');
$pdo = conectar();

$tabela = 'books';

//busca de dados sobre os livros

$id = 1;
$stmt = $pdo->prepare('SELECT * FROM ' . $tabela . ' WHERE id = :id');
$stmt->execute(array('id' => $id));

$resultado = $stmt->fetchAll();

foreach ($resultado as $key) {
    var_dump($key);
}
