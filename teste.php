<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Produtos</title>
</head>
<body>
    <?php
        include 'conexao.php';
        $consulta = $cn->query('select * from vw_livro');
        while($exibe = $consulta->fetch(PDO::FETCH_ASSOC))
        {
            echo $exibe['nm_livro'].'<br>';
            echo $exibe['vl_preco'].'<br>';
            echo $exibe['ds_categoria'].'<br> <br>';
        };
    ?>
</body>
</html>