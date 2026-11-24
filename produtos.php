<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <script>
    alert("JavaScript está funcionando!");
</script>

    <header>

    <div class="logo">

        <h1>Orgânica 🌱</h1>

    </div>

    <nav>
    <ul class="menu">

        <li>
            <a href="index.php">Home</a>
        </li>

        <li>
            <a href="dashboard.php">Dashboard</a>
        </li>

        <li>
            <a href="produtos.php">Produtos</a>

            <ul class="submenu">
                <li><a href="pequena.php">Pequena</a></li>
                <li><a href="media.php">Média</a></li>
                <li><a href="grande.php">Grande</a></li>
            </ul>

        </li>

        <li>
            <a href="carrinho.php">
                🛒 Minha cesta
                (<span id="quantidade-carrinho">0</span>)
            </a>
        </li>

    </ul>
</nav>
</header>

<main>
    
<section class="produtos">

    <h2>Nossas Cestas</h2>

        <div class="cards">

            <div class="card">

                <div class="imagem-card">
                    <img src="assets/IMG/Cesta Pequena.png" alt="Cesta pequena">
                </div>

                <h3>Cesta Pequena</h3>

                <p class="preco">R$ 35,00</p>

                <div class="opcoes">
                    <h4>Produtos incluídos:</h4>

                    <ul>
                        <li> Maçã</li>
                        <li> Banana</li>
                        <li> Cenoura</li>
                        <li> Alface</li>
                    </ul>
                </div>

            <button onclick="adicionarCarrinho('Cesta Pequena', 35.00)">
    🛒 Adicionar à cesta
</button>

            </div>
            
            <div class="card">

                <div class="imagem-card">
                    <img src="assets/IMG/Cesta Média.png" alt="Cesta média">
                </div>

                <h3>Cesta Média</h3>

                <p class="preco">R$ 55,00</p>

                <div class="opcoes">
                    <h4>Produtos incluídos:</h4>

                    <ul>
                        <li> Maçã</li>
                        <li> Banana</li>
                        <li> Laranja</li>
                        <li> Cenoura</li>
                        <li> Alface</li>
                        <li> Tomate</li>
                    </ul>
                </div>

             <button onclick="adicionarCarrinho('Cesta Média', 55.00)">
    🛒 Adicionar à cesta
</button>

            </div>

            <div class="card">

                <div class="imagem-card">
                    <img src="assets/IMG/Cesta Grande.png" alt="Cesta grande">
                </div>

                <h3>Cesta Grande</h3>

                <p class="preco">R$ 80,00</p>

                <div class="opcoes">
                    <h4>Produtos incluídos:</h4>

                    <ul>
                        <li> Maçã</li>
                        <li> Banana</li>
                        <li> Laranja</li>
                        <li> Uva</li>
                        <li> Cenoura</li>
                        <li> Alface</li>
                        <li> Tomate</li>
                        <li> Brócolis</li>
                    </ul>
                </div>

                <button onclick="adicionarCarrinho('Cesta Grande', 80.00)">
    🛒 Adicionar à cesta
</button>

            </div>

        </div>

</section>

</main>

<footer>
    <p>© 2026 ORGÂNICA 🌱 - Produtos Naturais</p>
</footer>

<script src="js/script.js"></script>
</body>
</html>