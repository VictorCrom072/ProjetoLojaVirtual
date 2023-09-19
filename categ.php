<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Loja</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        .navbar{ margin-bottom: 0%; } 
    </style>
</head>
<body>
    <?php
        include 'nav.php';
        include 'cabecalho.html';
        include 'conexao.php';
        $cat = $_GET['cat'];
        $consulta = $cn->query("select ds_capa, nm_livro, vl_preco, qt_estoque from vw_livro where ds_categoria = '$cat'");
    ?>
    <div class='container-fluid'>
        <div class='row'>      
            <?php while($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) { ?>
                <div class='col-sm-3'>
                    <img src="img/<?php echo $exibe['ds_capa'] ?>.jpg" class='img-responsive' style='width: 100%;'>
                    <div><h3><b><?php echo mb_strimwidth($exibe['nm_livro'], 0 , 30, "...")?></b></h3></div>
                    <div><h4>R$<?php echo number_format($exibe['vl_preco'], 2, ",", ".")?></h4></div>
                    <div class="text-center" style="margin-bottom: 5px;">
                        <button class=" btn btn-lg btn-block btn-info">
                            <span class="glyphicon glyphicon-info-sign"> Detalhes</span>
                        </button>
                        <?php if($exibe['qt_estoque'] > 0) { ?>
                            <button class=" btn btn-lg btn-block btn-success">
                                <span class="glyphicon glyphicon-usd"> Comprar</span>
                            </button>
                        <?php } else { ?>
                            <button class=" btn btn-lg btn-block btn-danger" disabled>
                                <span class="glyphicon glyphicon-remove-circle"> Indisponivel</span>
                            </button>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <?php include 'rodape.html'; ?>
</body>
</html>