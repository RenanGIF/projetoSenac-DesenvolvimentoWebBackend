<?php
    if(isset($_POST["usuario"]) && isset($_POST["senha"])){
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];

        $usuariosSalvos = file("usuarios.txt");
        foreach ($usuariosSalvos as $usuarioSalvo) {
            $dados = explode("|", $usuarioSalvo);

            if($dados[1] == trim($usuario) && $dados[2] == trim($senha)){
                echo "<script>alert('Login bem-sucedido!');</script>";
                header("Location: produto.php");
            }
            else {
                echo "<script>alert('Usuário ou senha incorretos.');</script>";
            }
        }    
    }
?>


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
        <div class="buttonHeader">
            <button><a href="cadastro.php">Cadastro</a></button>
            <button><a href="login.php">Login</a></button>
        </div>
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
    <section class="formularioCadastro">
            <div class="paginaTitulo">
                <h2>Login</h2>
                <p>Entre com suas credenciais para acessar sua conta.</p>
            </div>
            <form method="POST" enctype="multipart/form-data">
                <div class="campoForm">
                    <label for="usuario">Usuário</label>
                    <input id="usuario" name="usuario" type="text" required>
                </div>
                <div class="campoForm">
                    <label for="senha">Senha</label>
                    <input id="senha" type="password" name="senha" required>
                </div>
                <button type="submit">Fazer login</button>
            </form>
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

