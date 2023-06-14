<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Biblioteca</title>
    <a href="../cadastrar/cadastrar_autores.php">cadastrar autores</a> <br>
    <a href="../listar/listar_livros.php">listar livros</a> <br>
    <a href="../listar/listar_livros&autor.php">listar autores e livros</a> <br>

</head>

<body>
    <h2>cadastrar livros</h2>
    <div>
        <?php
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        
        ?>
        
    </div>
    <form action="../processo.php" method="post">

        <!-- titulo do livro -->
        <label for="l.titulo">titulo</label> <br>
        <input type="text" name="titulo" id="l.titulo" placeholder="titulo do livro" /> <br>
        <!-- paginas -->
        <label for="pg">paginas</label> <br>
        <input type="number" name="paginas" id="pg" min=1 placeholder="número de paginas" /> <br>
        <!-- ano de fabricação -->
        <label for="fabric">fabricação</label> <br>
        <input type="number" name="ano" id="fabric" min=1 placeholder="ano de fabricação"> <br>
        <!-- id do autor do livro -->
        <label for="l.id_autor_livro">autor do livro (id)</label><br>
        <input type="number" name="id_autor_livro" id="l.id_autor_livro" placeholder="id do autor o livro"><br>
        <hr>
        <input type="submit" name="envio" id="submit" />
    </form>
</body>

</html>