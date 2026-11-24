<?php

$servidor = "localhost";
$banco = "banco_organica";
$usuario = "root";
$senha = "";

try {

    $pdo = new PDO(
        "mysql:host=$servidor;dbname=$banco;charset=utf8",
        $usuario,
        $senha
    );

    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

} catch (PDOException $erro) {

    die("Não foi possível conectar ao banco de dados.");

}

?>
