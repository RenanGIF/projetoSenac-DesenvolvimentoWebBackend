<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel Store</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header> 
        <div>
            <h1>Pixel Store</h1>
            <h3>Informática para o seu próximo nível</h3>
        </div>
        <button id="botaoAdm" onclick="exibirAdmin()">Admin</button>
    </header>

    <nav>
        <div class="linksNav">
            <a class="activeLink" href="index.php">Início</a>
            <a href="#destaquesSemanaT">Destaques da semana</a>
            <a href="catalogo.php">Catálogo</a>
            <a href="atendimento.php">Atendimento</a>
        </div>
        <div class="buttonNav">
            <button onclick="modoPromocao()">Modo Promoção</button>  
        </div> 
    </nav>

    <main>
        <hero>
            <img src="">
            <div class="conteinerFormResp">
                <form>
                    <h2>Entre para ver nossas ofertas especiais:</h2>
                    <p>Digite seu nome:</p>
                    <input id="nomeEntrou">
                    <button id="respostaFormBV" type="button" onclick="exibirBoasVindas()">Enviar</button>   
                </form>     
                <p id="respostaContato"></p> 
            </div>
        </hero>

        <section class="destaquesSemana">
            <h2 id="destaquesSemanaT">Destaques da Semana:</h2>

            <div class="conteinerCardsDS">

                <div id="cardMouse" class="CardsDS">
                    <img src="imagens/mouse_logitech_g203.webp">
                    <p class="freteGratisLabel">Frete Gratis</p>
                    <p id="descontoMouse" class="descontoLabel">15% OFF</p>
                    <h3>Mouse Gamer Logitech G203 LIGHTSYNC - Preto</h3>
                    <p>RGB, Efeito de Ondas de Cores, 6 Botões Programáveis e Até 8.000 DPI</p>
                    <div class="avaliacoes">
                        <img src="imagens/estrela.png">
                        <img src="imagens/estrela.png">
                        <img src="imagens/estrela.png">
                        <img src="imagens/estrela.png">
                        <img src="imagens/estrela.png">
                        <p>45 Avaliações</p>
                    </div>
                    <p class="precoSD">De: R$ 120,00 <p class="precoSDTextDN">Por:</p>
                    <p id="precoMouse" class="precoCD">R$ 114,00</p>
                    <button><a href="produtoX">Comprar</a></button>
                </div>

                <div class="CardsDS">
                    <img src="imagens/headset-gamer-havit-h2015se.webp">
                    <p class="freteGratisLabel">Frete Gratis</p>
                    <p class="descontoLabel">2% OFF</p>
                    <h3>Headset Gamer Havit H2015SE, 3.5mm, Drivers de 53mm, Branco</h3>
                    <p>RGB, Efeito de Ondas de Cores, 6 Botões Programáveis e Até 8.000 DPI</p>
                    <div class="avaliacoes">
                        <img src="imagens/estrela.png">
                        <img src="imagens/estrela.png">
                        <img src="imagens/estrela.png">
                        <img src="imagens/estrela.png">
                        <img src="imagens/estrela.png">
                        <p>45 Avaliações</p>
                    </div>
                    <p class="precoSD">De: R$ 150 <p class="precoSDTextDN">Por:</p>
                    <p class="precoCD">R$ 127,50</p>
                    <button><a href="produtoX">Comprar</a></button>
                </div>

                <div id="cardControle" class="CardsDS">
                    <img src="imagens/controle-gamer-8bitdo-ultimate-2c.webp">
                    <p class="freteGratisLabel">Frete Gratis</p>
                    <p id="descontoControle"class="descontoLabel">35% OFF</p>
                    <h3>Controle Gamer 8BitDo Ultimate 2C</h3>
                    <p>Bluetooth/Wireless, Hall Effect, Mint, 81HD03, Disponível em menta, pêssego, verde e roxo</p>
                    <div class="avaliacoes">
                        <img src="imagens/estrela.png">
                        <img src="imagens/estrela.png">
                        <img src="imagens/estrela.png">
                        <img src="imagens/estrela.png">
                        <img src="imagens/estrela.png">
                        <p>45 Avaliações</p>
                    </div>
                    <p class="precoSD">De: 307,69 <p class="precoSDTextDN">Por:</p>
                    <p id="precoControle" class="precoCD">R$ 200,00</p>
                    <button><a href="produtoX">Comprar</a></button>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <hr>
        <h2><b>Pixel Store</b></h2>
        <p><b>CNPJ:</b>00.000.000/0001-00</p>
        <p><b>Endereço:</b> X. xxxxxxx, yyyy - X, Uberlândia - MG, xxxxx-xxx</p>
        <p><b>Atendimento:</b>De segunda a sexta das 8:30 às 12H / 13H às 18H</p>
        <p><b>&copy; 2026 Pixel Store</b></p>
    </footer>

    <script src="script.js"></script>
</body>
</html>