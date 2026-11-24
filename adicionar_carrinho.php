<?php
session_start();
header("Content-Type: application/json; charset=utf-8");

$dados = json_decode(file_get_contents("php://input"), true);

if (!$dados || empty($dados["nome"]) || !isset($dados["preco"])) {
    echo json_encode(["sucesso" => false]);
    exit;
}

$nome = trim($dados["nome"]);
$preco = (float) $dados["preco"];

if (!isset($_SESSION["carrinho"])) {
    $_SESSION["carrinho"] = [];
}

if (isset($_SESSION["carrinho"][$nome])) {
    $_SESSION["carrinho"][$nome]["quantidade"] += 1;
} else {
    $_SESSION["carrinho"][$nome] = [
        "nome" => $nome,
        "preco" => $preco,
        "quantidade" => 1
    ];
}

echo json_encode(["sucesso" => true]);