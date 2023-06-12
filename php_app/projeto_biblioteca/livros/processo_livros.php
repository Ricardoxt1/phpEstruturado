<?php
session_start();
include_once("conexão.php");

$user_name = $_POST["nome"] ? $_POST["nome"] : false;
$email = $_POST["email"] ? $_POST["email"] : false;

$result_costumers = "insert into costumers (name, email, created) values ('$user_name', '$email', NOW())";
$resultado_costumers = mysqli_query($conn, $result_costumers);

if (mysqli_insert_id($conn)) {
    $_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso!</p>";
    header("Location:cadastrar_consumidores.php");
} else {
    $_SESSION['msg'] = "<p style='color:green;'>Cadastro não foi realizado com sucesso.</p>";
    header("Location:cadastrar_consumidores.php");
}
