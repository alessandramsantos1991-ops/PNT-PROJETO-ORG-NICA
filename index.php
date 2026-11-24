<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ORGÂNICA - Produtos Naturais</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>

       <div class="logo">
            <h1>ORGÂNICA 🌱</h1>
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
                    <a href="#" onclick="sair()">Sair</a>

                </li> 

            </ul> 

        </nav>

    </header>

    <main>

    <section id="home" class="inicio">

        <div class="texto-inicio">

            <h2>Produtos Frescos e Naturais</h2>

            <button onclick="boasVindas()">
    Conheça nossas cestas
</button>
   
        </div>

        <div class="imagem-inicio">
            <img src="assets/IMG/logo principal.png" alt="Logo ORGÂNICA">
        </div>

    </section>

    </main>

    <section id="sobre" class="sobre">

        <h2>Sobre a ORGÂNICA</h2>

        <p>
            A ORGÂNICA oferece frutas, verduras e legumes produtos selecionados para você e sua família.
        </p>

    </section>

    <footer>

        <p>© 2026 ORGÂNICA 🌱 - Produtos Naturais</p>
        
    </footer>

<script src="js/script.js"></script>

</body>

</html>
