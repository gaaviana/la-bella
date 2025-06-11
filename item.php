<?php
require_once "./vendor/autoload.php";

use LaBella\Services\ProdutoServico;

$produtoServico = new ProdutoServico;

$id = filter_input(INPUT_GET, "item", FILTER_SANITIZE_NUMBER_INT);

$listarUm = $produtoServico->listarUm($id);


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lá Bella - Margherita</title>
    <link rel="icon" href="./images/logo.png" type="image/png" sizes="32x32">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header class="cabecalho">
        <div class="cabecalho-esquerda">
            <a href="cardapio.php" class="seta-voltar"><i class="fa-solid fa-reply fa-2xs"></i></a>
            <h1>Lá Bella</h1>
        </div>
        <div class="cabecalho-direita">
            <a href="#" class="icone-carrinho"><i class="fas fa-shopping-cart"></i></a>
        </div>
    </header>

    <main class="detalhe-item">
        <div class="imagem-item-placeholder"></div>
        <div class="info-item">
            <h2 class="nome-item"><?=$listarUm['nome']?></h2>
            <span class="preco-item"><?=$listarUm['preco']?></span>
        </div>
        <p class="descricao-item"><?=$listarUm['descricao']?></p>

        <div class="secao-opcoes">
            <div class="caixa-opcao">
                <span>Deseja adicionar algum item?</span>
                <span class="seta-baixo">V</span>
            </div>
            <div class="caixa-opcao">
                <span>Deseja retirar algum item?</span>
                <span class="seta-baixo">V</span>
            </div>
        </div>

        <div class="secao-observacao">
            <label for="observation">Observação:</label>
            <textarea id="observation" rows="5"></textarea>
        </div>

        <button class="botao-adicionar-carrinho">ADICIONAR AO CARRINHO</button>
    </main>

   <?php include "./includes/rodape.php" ?>
</body>
</html> 