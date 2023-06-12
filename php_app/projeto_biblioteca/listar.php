<?php
session_start();
include_once("./conexão.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Biblioteca</title>
    <a href="./cadastrar.php">cadastrar</a>
    <a href="./listar.php">listar</a>
</head>

<body>
    <h2>listagem de usuarios</h2>
    <div>
        <?php
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }

        //inserir paginação
        $pagina_atual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);  
        $pagina = (!empty($pagina_atual) ? $pagina_atual : 1);

        //setar quantidade de itens de pagina 

        //seleção de todos costumers por id, nome e email 
        $result_costumers = "SELECT * FROM costumers";
        $total_costumers = mysqli_query($conn, $result_costumers);
        while ($costumers = mysqli_fetch_assoc($total_costumers)){
            echo "Id: ". $costumers['id'] . "<br>";
            echo "name: ". $costumers['name'] . "<br>";
            echo "email: ". $costumers['email'] . "<br><hr>";
        }

        ?>
    </div>
    
    
    </form>
</body>

</html>