<?php
session_start();
require_once "conexao.php";

$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

    // Cadastro público somente como cliente
    $perfil_id = 2;

    try {

        $sql = "INSERT INTO usuarios
                (nome, email, senha, perfil_id)
                VALUES (?, ?, ?, ?)";

        $stmt = $pdo->prepare($sql);

        $stmt->execute([
            $nome,
            $email,
            $senha,
            $perfil_id
        ]);

        $mensagem = "Cadastro realizado com sucesso!";

    } catch (PDOException $e) {

        $mensagem = "Erro ao realizar cadastro. Verifique se o e-mail já existe.";

    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro - ORGÂNICA</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Cadastro ORGÂNICA 🌱</h1>

    <form method="POST">

        <label>Nome:</label>
        <input type="text" name="nome" required>

        <label>E-mail:</label>
        <input type="email" name="email" required>

        <label>Senha:</label>
        <input type="password" name="senha" required>

        <button type="submit">Cadastrar</button>

    </form>

    <p><?php echo $mensagem; ?></p>

    <a href="login.php">Já tenho cadastro. Entrar</a>

</body>
</html>
