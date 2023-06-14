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
    <a href="./cadastrar.php">cadastrar</a> <br />
    <a href="./listar.php">listar</a>
</head>

<body>
    <h2>cadastrar</h2>
    <div>
        <?php
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }

        ?>
    </div>
    <form action="processo.php" method="post">
        <label for="l.autor">autor</label> <br>
        <input type="text" name="nome_autor" id="l.autor" placeholder="nome do autor" /> <br />
        <label for="l.titulo">titulo</label> <br>
        <input type="text" name="titulo" id="l.titulo" placeholder="titulo do livro" /> <br />
        <label for="pg">paginas</label> <br>
        <input type="number" name="paginas" id="pg" min=1 placeholder="número de paginas" /> <br />
        <label for="fabric">fabricação</label> <br>
        <input type="number" name="ano" id="fabric" min=1 placeholder="ano de fabricação"> <br>
        <input type="submit" name="envio" id="submit" />
    </form>
</body>

</html>