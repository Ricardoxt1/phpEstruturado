<?php
session_start();
include_once("../../projeto_biblioteca/conexão.php");

$titulo = $_POST["titulo"] ? $_POST["titulo"] : false;
$pagina = $_POST["paginas"] ? $_POST["paginas"] : false;
$ano_fabricação = $_POST["ano"] ? $_POST["ano"] : false;

$result_livros = "insert into books (titule, page, realese_date) values ('$titulo', '$pagina', '$ano_fabricação')";
$resultado_livros = mysqli_query($conn, $result_livros);

if (mysqli_insert_id($conn)) {
    $_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso!</p>";
    header("Location:cadastrar_livros.php");
} else {
    $_SESSION['msg'] = "<p style='color:red;'>Cadastro não foi realizado com sucesso.</p>";
    header("Location:cadastrar_livros.php");
}
