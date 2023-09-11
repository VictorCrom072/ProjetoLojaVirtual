<?php
    $servidor = "Localhost";
    $usuario = "Crom";
    $banco = "db_LojaVirtual";
    $senha = "12345678";
    $cn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
?>