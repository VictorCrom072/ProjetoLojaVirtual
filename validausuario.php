<?php
    include 'conexao.php';
    $Vemail = $_POST['txtemail'];
    $Vsenha = $_POST['txtsenha'];

    //echo $Vemail.'<br>';
    //echo $Vsenha.'<br>';

    $consulta = $cn->query("select id_usu, nm_usu, ds_email, ds_senha, ds_status from tbl_usuario where ds_email = '$Vemail' and ds_senha = '$Vsenha'");

    if($consulta->rowCount() == 1)
        echo 'usuario está logado';
    else
        echo 'usuario não logado';

?>