<?php
session_start();
include_once("../../conexão.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Biblioteca</title>
    <a href="../cadastrar/cadastrar_autores.php">cadastrar autores</a> <br>
    <a href="../cadastrar/cadastrar_livros.php">cadastrar livros</a> <br>
    <a href="../listar/listar_livros.php">listar livros</a> <br>
</head>

<body>
    <h2>listagem de livros e seus autores</h2>
    <div>
        <!-- mensagem catch e err -->
        <?php
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        //resgate de livros e seus autores
        $result_livros_autores = "SELECT a.name, b.titule FROM books as b right join authors as a on a.id = b.author_id";
        $total_livros_autores = mysqli_query($conn, $result_livros_autores);
        while ($livros_autores = mysqli_fetch_assoc($total_livros_autores)) {
            echo $livros_autores['titule'] . " foi escrito por " . $livros_autores['name'] . "<br><hr>";
        };
        ?>
    </div>
</body>

</html>