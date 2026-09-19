<?php
    if(isset($_POST["nome"],)){
        $nome = $_POST["nome"];
        $preco = $_POST["preco"];
        $fotoDesenhinho = $_FILES["imagem"];

        $caminho = "imagens/" . time() . ".jpg";

        move_uploaded_file(
            $fotoDesenhinho["tmp_name"],
            $caminho
        );

        $linha = $nome . "|" . $preco . "|" . $caminho;

        file_put_contents("produtos.txt", $linha . PHP_EOL, FILE_APPEND);
    }

    foreach($admin as $dado){
        $dados = explode("|", $admin)
        echo $dados[0] . " - " . $dados[1];
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração | Pixel Store</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div>
            <h1>Pixel Store</h1>
            <h3>Painel de administração</h3>
        </div>
        <a href="index.php"><button type="button">Voltar à loja</button></a>
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
        <section class="formularioAdmin">
            <div class="paginaTitulo">
                <h2>Cadastrar produto</h2>
                <p>Preencha os dados para adicionar um novo produto à loja.</p>
            </div>
            <form method="POST" enctype="multipart/form-data">
                <div class="campoForm">
                    <label for="nome">Nome do produto</label>
                    <input id="nome" name="nome" type="text" required>
                </div>
                <div class="campoForm">
                    <label for="preco">Preço do produto</label>
                    <input id="preco" name="preco" type="text" placeholder="Ex.: R$ 199,90" required>
                </div>
                <div class="campoForm">
                    <label for="imagem">Imagem do produto</label>
                    <input id="imagem" type="file" name="imagem" accept="image/*" required>
                </div>
                <button type="submit">Cadastrar produto</button>
            </form>
        </section>
    </main>
    <footer>
        <hr>
        <h2>Pixel Store</h2>
        <p><b>&copy; 2026 Pixel Store</b></p>
    </footer>
</body>
</html>



