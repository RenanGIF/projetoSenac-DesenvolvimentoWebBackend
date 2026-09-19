<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Atendimento | Pixel Store</title>
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
		<div class="paginaTitulo">
			<h2>Fale com a Pixel Store</h2>
			<p>Estamos aqui para ajudar você a escolher o produto certo.</p>
		</div>
		<div class="atendimentoGrid">
			<section class="painel infoAtendimento">
				<h2>Informações</h2>
				<p><b>Telefone:</b> (34) 0000-0000</p>
				<p><b>E-mail:</b> contato@pixelstore.com</p>
				<p><b>Horário:</b> segunda a sexta, das 8:30 às 18h.</p>
				<p>Respondemos sua mensagem o mais rápido possível.</p>
			</section>
			<section class="painel">
				<h2>Envie uma mensagem</h2>
				<form action="#" method="post">
					<div class="campoForm">
						<label for="nome">Nome</label>
						<input id="nome" name="nome" type="text" required>
					</div>
					<div class="campoForm">
						<label for="email">E-mail</label>
						<input id="email" name="email" type="email" required>
					</div>
					<div class="campoForm">
						<label for="mensagem">Mensagem</label>
						<textarea id="mensagem" name="mensagem" rows="5" required></textarea>
					</div>
					<button type="submit">Enviar mensagem</button>
				</form>
			</section>
		</div>
	</main>
	<footer>
		<hr>
		<h2>Pixel Store</h2>
		<p><b>&copy; 2026 Pixel Store</b></p>
	</footer>
	<script src="script.js"></script>
</body>
</html>
