<?php

require_once "./vendor/autoload.php";

use LaBella\Services\ProdutoServico;

$produtoServico = new ProdutoServico;

$listarProdutos = $produtoServico->listarTodos();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lá Bella</title>
    <link rel="icon" href="./images/logo.png" type="image/png" sizes="32x32">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>
   <?php include "./includes/cabecalho.php" ?>
    <main>
        <section>
            <div class="barra"></div>
            <div class="hero">
                <img src="./images/banner.jpg" alt="banner de desconto">
            </div>
            <div class="barra"></div>
        </section>

        <section>
            <div class="recompensas">
                <p class="recompensas-texto">Junte-se ao Clube Bella e ganhe recompensas a cada pizza!</p>
                <button class="recompensas-botao">Saiba mais</button>
            </div>
        </section>

        <section class="sessao-carrossel">
            <div class="carrossel">
                <div class="carrossel-lista">
                    <?php foreach ($listarProdutos as $produto) {?>
                    <a href="item.php?item=<?=$produto['id']?>" class="cardapio-item-link">
                        <div class="carrossel-item">
                            <div class="carrossel-info">
                                <h3 class="titulo"><?=$produto['nome']?></h3>
                                <p class="descricao"><?=$produto['descricao']?></p>
                            </div>
                            <img src="./images/pizza.png" alt="Imagem 1" class="carrossel-imagem">
                            <p class="preco"><?=$produto['preco']?></p>
                        </div>
                    </a>
                    <?php }?>
                </div>
                <button class="anterior">&#10094;</button>
                <button class="proximo">&#10095;</button>
            </div>
        </section>
        <a class="descubra" href="cardapio.html"><button class="descubra-botao">--- descubra --- <br><b>NOSSAS PIZZAS</b></button></a>
        <section>
            <div class="sobre">
                <div class="sobre-logo">
                    <img src="./images/logo.png" alt="Logo Lá Bella">
                </div>
                <div class="separador"></div>
                <div class="sobre-texto">
                    <p>Há mais de 20 anos oferecendo o melhor da gastronomia italiana em cada fatia."</p>
                </div>
            </div>
        </section>

        <section>
            <div class="hero">
                <img src="./images/banner2.png" alt="banner de desconto">
            </div>
        </section>

        <?php include "./includes/rodape.php" ?>
    </main>
</body>
<script src="main.js"></script>

</html>