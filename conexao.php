<?php
    $servidor = "Localhost";
    $usuario = "Crom";
    $banco = "db_LojaVirtual";
    $senha = "12345678";
    $cn = new PDO("mysql:host=$servidor;db_name=$banco", $usuario, $senha);
?>