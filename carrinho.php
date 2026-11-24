
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Minha Cesta - ORGÂNICA</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>

    <div class="logo">
        <h1>Orgânica 🌱</h1>
    </div>

    <nav>
        <ul class="menu">

            <li><a href="index.php">Home</a></li>

            <li><a href="dashboard.php">Dashboard</a></li>

            <li><a href="produtos.php">Produtos</a></li>

            <li><a href="carrinho.php">🛒 Minha cesta</a></li>

        </ul>
    </nav>

</header>

<main>

    <section class="produtos">

        <h2>Minha Cesta 🛒</h2>

        <div id="lista-carrinho"></div>

        <h3 id="total-carrinho">Total: R$ 0,00</h3>

        <br>

        <a href="produtos.php">
            <button>Continuar comprando</button>
        </a>

    </section>

</main>

<footer>

    <p>© 2026 ORGÂNICA 🌱 - Produtos Naturais</p>

</footer>

<script src="script.js"></script>

</body>
</html>
