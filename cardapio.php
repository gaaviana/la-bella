<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lá Bella - Cardápio</title>
    <link rel="icon" href="./images/logo.png" type="image/png" sizes="32x32">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <?php include "./includes/cabecalho.php" ?>
    <main>
        <section class="cardapio-secao">
            <h1 class="cardapio-titulo">M E N U</h1>
            <div class="cardapio-categorias">
                <button class="categoria-botao destaque" style="display: none;">DESTAQUE</button>
                <button class="categoria-botao cardapio-ativo">CARDÁPIO</button>
                <button class="categoria-botao ofertas" style="display: none;">OFERTAS</button>
            </div>
            <div class="cardapio-lista">
                <a href="item.php" class="cardapio-item-link">
                    <div class="cardapio-item">
                        <div class="item-imagem"></div>
                        <div class="item-info">
                            <h2 class="item-titulo">Margherita</h2>
                            <p class="item-descricao">Tomate fresco, mussarela de búfala, manjericão e azeite de oliva.</p>
                        </div>
                    </div>
                </a>
                <a href="item.php" class="cardapio-item-link">
                    <div class="cardapio-item">
                        <div class="item-imagem"></div>
                        <div class="item-info">
                            <h2 class="item-titulo">Calabresa</h2>
                            <p class="item-descricao">Calabresa fatiada, cebola, azeitonas e molho de tomate.</p>
                        </div>
                    </div>
                </a>
                <a href="item.php" class="cardapio-item-link">
                    <div class="cardapio-item">
                        <div class="item-imagem"></div>
                        <div class="item-info">
                            <h2 class="item-titulo">Frango c/ Catupiry</h2>
                            <p class="item-descricao">Peito de frango desfiado, catupiry, milho verde e azeitonas.</p>
                        </div>
                    </div>
                </a>
                <a href="item.php" class="cardapio-item-link">
                    <div class="cardapio-item">
                        <div class="item-imagem"></div>
                        <div class="item-info">
                            <h2 class="item-titulo">Calabresa</h2>
                            <p class="item-descricao">Calabresa fatiada, cebola, azeitonas e molho de tomate.</p>
                        </div>
                    </div>
                </a>
                <a href="item.php" class="cardapio-item-link">
                    <div class="cardapio-item">
                        <div class="item-imagem"></div>
                        <div class="item-info">
                            <h2 class="item-titulo">Margherita</h2>
                            <p class="item-descricao">Tomate fresco, mussarela de búfala, manjericão e azeite de oliva.</p>
                        </div>
                    </div>
                </a>
            </div>
        </section>
    </main>
<?php include "./includes/rodape.php" ?>
    <script src="main.js"></script>
</body>

</html>