<?php
session_start();
include_once("../../projeto_biblioteca/conexão.php");

//livros POST
$titulo = $_POST["titulo"] ? $_POST["titulo"] : false;
$pagina = $_POST["paginas"] ? $_POST["paginas"] : false;
$ano_fabricação = $_POST["ano"] ? $_POST["ano"] : false;
$id_autor_livro = $_POST["id_autor_livro"] ? $_POST["id_autor_livro"] : false;

//autor POST
$nome_autor = $_POST["nome_autor"] ? $_POST["nome_autor"] : false;
$id_autor = $_POST["id_autor"] ? $_POST["id_autor"] : false;

//caminho para inserção de dados para livros
$result_livros = "insert into books (titule, page, realese_date, author_id) values ('$titulo', '$pagina', '$ano_fabricação', '$id_autor_livro')";
$resultado_livros = mysqli_query($conn, $result_livros);

//caminho para inserção de dados para autores
$result_autores = "insert into authors (id, name) values ('$id_autor','$nome_autor')";
$resultado_autores = mysqli_query($conn, $result_autores);

//mensagem catch e err
if (mysqli_insert_id($conn)) {
    $_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso!</p>";
    header("Location:cadastrar_livros.php");
} else {
    $_SESSION['msg'] = "<p style='color:red;'>Cadastro não foi realizado com sucesso.</p>";
    header("Location:cadastrar_livros.php");
}
