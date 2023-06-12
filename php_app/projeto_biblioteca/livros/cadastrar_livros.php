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
    <a href="./cadastrar_livros.php">cadastrar</a> <br />
    <a href="./listar_livros.php">listar</a>
</head>

<body>
    <h2>cadastro de usuário</h2>
    <div>
        <?php
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }

        ?>
    </div>
    <form action="processo_livros.php" method="post">

        <label for="l.titule">titulo</label>
        <input type="text" name="titule" id="l.titule" /> <br />
        <label for="pg">paginas</label>
        <input type="number" name="paginas" id="pg" min=1 /> <br />
        <label for="fabric">fabricação</label>
        <input type="number" name="ano-fab" id="fabric" min=1>
        <input type="submit" name="envio" id="submit" />
    </form>
</body>

</html>