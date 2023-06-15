<?php

include_once('../../config.php');
$pdo = conectar();

$tabela = 'authors';

//inserindo autores no banco de dados

$smt = $pdo->prepare('INSERT INTO '.$tabela.' (name) VALEUS' ('j.r.r. tolkein'));