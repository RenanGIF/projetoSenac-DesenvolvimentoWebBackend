<?php
    echo "<h1>Aula 02</h1>";
    echo "<p>Bem-vindo à Aula 02!</p>";

    $arquivo = "produtos.txt";

    if(isset($_POST["nome"])){

        $nome = $_POST["nome"];
        $preco = $_POST["preco"];
        $fotoDesenhinho = $_FILES["imagem"];

        $caminho = "imagens/" . time() . ".jpg";

        move_uploaded_file(
            $fotoDesenhinho["tmp_name"],
            $caminho
        );

        $linha = $nome . "|" . $preco . "|" . $caminho;

        file_put_contents($arquivo, $linha . PHP_EOL, FILE_APPEND);

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02</title>
</head>
<body>
    <form action="aula2.php" method="POST" enctype="multipart/form-data">
        <label>Nome do Produto:</label>
        <input name="nome">
        <br>

        <label>Preço do Produto:</label>
        <input name="preco">
        <br>

        <label>Imagem do Produto:</label>
        <input type="file" name="imagem">
        <br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>