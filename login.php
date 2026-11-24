
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - ORGÂNICA</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main class="login">

        <h1>ORGÂNICA 🌱</h1>

        <p class="subtitulo">Produtos naturais e orgânicos</p>

        <h2>Bem-vindo(a)!</h2>

        <p class="texto-login">Entre na sua conta</p>

        <form action="login.php" method="POST">

            <div class="form-grupo">

                <label for="email">E-mail</label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Digite seu e-mail"
                    required
                >

            </div>

            <div class="form-grupo">

                <label for="senha">Senha</label>

                <input
                    type="password"
                    id="senha"
                    name="senha"
                    placeholder="Digite sua senha"
                    required
                >

            </div>

            <button type="submit" name="entrar">
                Entrar
            </button>

        </form>

        <p class="cadastro">
            Ainda não tem conta?
            <a href="cadastro.php">Cadastre-se</a>
        </p>

        <a href="index.php" class="voltar">Voltar para o início</a>

    </main>

</body>

</html>
