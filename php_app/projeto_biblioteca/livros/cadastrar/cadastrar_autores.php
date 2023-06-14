<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Biblioteca</title>
    <a href="../cadastrar/cadastrar_livros.php">cadastrar livros</a> <br>
    <a href="../listar/listar_livros.php">listar livros</a> <br>
    <a href="../listar/listar_livros&autor.php">listar autores e livros</a> <br>
</head>

<body>
    <h2>cadastro de autores</h2>
    <div>
        <?php
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>

    </div>
    <form action="../processo.php" method="post">
        <!-- nome do autor -->
        <label for="l.autor">autor</label> <br>
        <input type="text" name="nome_autor" id="l.autor" placeholder="nome do autor" /> <br>
        <!-- id do autor -->
        <label for="l.id_autor">id do autor</label> <br />
        <input type="number" name="id_autor" id="l.id_autor" min=1 maxlength="2" placeholder="id do autor"><br>
        <input type="submit" name="envio" id="submit" />
    </form>
</body>

</html>