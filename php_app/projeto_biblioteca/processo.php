<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dados do usuario</title>
</head>

<body>
    <?php

    include_once("conexão.php");

    $user_name = $_POST["nome"] ? $_POST["nome"] : false;
    $email = $_POST["email"] ? $_POST["email"] : false;

    // echo "nome do usuario: " . $user_name . " <br/>";
    // echo "email: " . $email . " <br/>";

    $result_costumers = "insert into costumers (name, email, created) values ('$name', '$email', NOW())";
    $resultado_costumers = mysqli_query($conn, $result_costumers);

    if (mysqli_insert_id($conn)) {
        header("Location: cadastrar.php");
    } else {
        header("Location: cadastrar.php");
    }
    ?>
    <a href="./cadastrar.php">voltar</a>
</body>

</html>