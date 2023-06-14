<?php
session_start();
include_once("../../conexão.php");

//autor POST
$nome_autor = $_POST["nome_autor"] ? $_POST["nome_autor"] : false;
$id_autor = $_POST["id_autor"] ? $_POST["id_autor"] : false;

//caminho para inserção de dados para autores
$result_autores = "insert into authors (id, name) values ('$id_autor','$nome_autor')";
$resultado_autores = mysqli_query($conn, $result_autores);

//mensagem catch e err
if (mysqli_insert_id($conn)) {
    $_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso!</p>";
    header("Location:cadastrar_autores.php");
} else {
    $_SESSION['msg'] = "<p style='color:red;'>Cadastro não foi realizado com sucesso.</p>";
    header("Location:cadastrar_autores.php");
}
