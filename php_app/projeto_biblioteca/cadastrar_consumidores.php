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
    <a href="./cadastrar_consumidores.php">cadastrar</a>
    <a href="./listar_consumidores.php">listar</a>
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
    <form action="./processo.php" method="post">

        <label for="l.n">nome</label>
        <input type="text" name="nome" id="l.n" /> <br />
        <label for="l.e">email</label>
        <input type="email" name="email" id="l.e" /> <br />
        <input type="submit" name="envio" id="submit" />
    </form>
</body>

</html>