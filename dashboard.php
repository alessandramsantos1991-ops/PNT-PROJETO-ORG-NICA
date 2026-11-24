<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
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
                        
                        <li> 
                            <a href="pequena.php">Pequena</a> 
                        </li> 

                        <li> 
                            <a href="media.php">Média</a> 

                        </li> 
                        
                        <li>
                            <a href="grande.php">Grande</a>
                        </li>
                    </ul> 
                </li> 

                <li> 
                    <a href="sobre.php">Sobre</a>

                </li> 

                <li> 
                    <a href="contato.php">Contato</a> 

                </li> 

                <li> 
                    <a href="login.php">Sair</a> 

                </li> 

            </ul>  
        </nav>
</header>

<main>
    <section class="dashboard">

        <h2>Bem-vindo à Orgânica</h2>

            <p>Confira nossas opções de cestas de produtos naturais.</p>

            <p>🌱 Valorizamos hábitos alimentares saudáveis.</p>

            <p>🧺 Facilitamos a compra de produtos naturais.</p>

            <p>🤝 Incentivamos a valorização dos produtores locais.</p>


    </section>
</main>

<footer>
    <p>© 2026 ORGÂNICA 🌱 - Produtos Naturais</p>
</footer>

<script src="js/script.js"></script>

</body>
</html>
