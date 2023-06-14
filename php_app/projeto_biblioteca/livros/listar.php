<?php
session_start();
include_once("../conexão.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Biblioteca</title>
    <a href="../livros/cadastrar.php">cadastrar</a>
    <a href="../livros/listar.php">listar</a>
</head>

<body>
    <h2>listagem de livros</h2>
    <div>
        <?php
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }

        //inserir paginação
        $pagina_atual =  filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);
        $pagina = (!empty($pagina_atual) ? $pagina_atual : 1);

        //setar quantidade de itens de pagina 
        $qnt_result_pg = 1;

        //calcular o inicio da visualização
        $inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;

        //seleção de todos os livros
        $result_livros = "SELECT * FROM books LIMIT $inicio, $qnt_result_pg";
        $total_livros = mysqli_query($conn, $result_livros);
        while ($livros = mysqli_fetch_assoc($total_livros)) {
            echo "livro: " . $livros['titule'] . ", pagínas: " . $livros['page'] . " e seu ano de lançamento: " . $livros['realese_date'] . ". <br>" . "<hr>";
        }

        //paginação - somar quantidade de livros
        $result_pg = "SELECT COUNT(id) AS num_result FROM books";
        $resultado_pg = mysqli_query($conn, $result_pg);
        $row_pg = mysqli_fetch_assoc($resultado_pg);

        //quantidade de paginas 
        $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
        $max_pg = 3;

        //primeira pagina
        echo "<a href='/projeto_biblioteca/livros/listar.php?pagina=1'> Primeira </a>";

        //paginas subsequentes 
        for ($pag_ant = $pagina - 1; $pag_ant <= $pagina; $pag_ant++) {
            if ($pag_ant >= 1) {
                echo "<a href='/projeto_biblioteca/livros/listar.php?pagina=$pag_ant'> $pag_ant </a>";
            }
        }

        for ($pag_seguinte = $pagina + 1; $pag_seguinte <= $pagina + $max_pg; $pag_seguinte++) {
            if ($pag_seguinte <= $quantidade_pg) {
                echo "<a href='/projeto_biblioteca/livros/listar.php?pagina=$pag_seguinte'> $pag_seguinte </a>";
            }
        }

        //ultima pg
        echo "<a href='/projeto_biblioteca/livros/listar.php?pagina=$quantidade_pg'> Ultima </a>";

        echo "<br>";
        echo "<h3> total de livros </h3>";

        
        
        $result_livros = "SELECT * FROM books";
        $total_livros = mysqli_query($conn, $result_livros);
        while ($livros = mysqli_fetch_assoc($total_livros)) {
            echo $livros['titule'] . ", pagínas: " . $livros['page'] . " e seu ano de lançamento: " . $livros['realese_date'] . ". <br>" . "<hr>";
        }


        ?>
    </div>
</body>

</html>