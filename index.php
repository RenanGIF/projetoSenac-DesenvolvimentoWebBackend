<?php
    echo "<h3>Exercício 1</h3>";
    //ex01
    echo "<h1>Olá, mundo!</h1>";
    echo "<h2>Exercicios primeira aula - 02/09/2026</h2>";


    echo "<hr><h3>Exercício 2</h3>";
    //ex02
    $nome = "Renan";
    $idade = 16; 
    echo "<br> Meu nome é $nome e tenho $idade anos. <br>";


    echo "<hr><h3>Exercício 3</h3>";
    //ex03
    $x = 10;
    $y = 9;
    $soma = $x + $y;
        //Maneira 1
        echo "<br> Sua soma é $soma";


        //Maneira 2
        echo "<br> Sua soma é " . $x + $y;


    echo "<hr><h3>Exercício 4</h3>";
    //ex04
    $a = 60;
    $b = 3;
    echo "<br>Sua soma é " .  $a + $b;
    echo "<br>Sua subtração é " .  $a - $b;
    echo "<br>Sua multiplicação é " .  $a * $b;
    echo "<br>Sua divisão é " .  $a / $b;


    echo "<hr><h3>Exercício 5</h3>";
    //ex05
    $cidade = "Uberlândia";
    $estado = "Minas Gerais";
    echo "<br>Você mora em " .  $cidade . " no estado de " . $estado;


    echo "<hr><h3>Exercício 6</h3>";
    //ex06
    $numero = 19;
    if($numero > 0){
        echo "<br>O numero " . $numero . " é maior que 0, então é positivo";
    }
    elseif($numero < 0){
        echo "<br>O numero " . $numero . " é menor que 0, então é negativo";
    }
    else{
        echo "<br>O numero " . $numero . " é igual a 0";
    }


    echo "<hr><h3>Exercício 7</h3>";
    //ex07
    $idade2 =  16;
    if($idade2 >= 18){
        echo "<br>Você tem " . $idade2 . " anos, então você é maior de idade";
    }
    else{
        echo "<br>Você tem " . $idade2 . " anos, então você é menor de idade";
    }
    
    echo "<br>";


    echo "<hr><h3>Exercício 8</h3>";
    //ex08
    //Explicação: $i = 1 (variavel de controle, começa em 1), $i < 11 (repete ate ser menor q 11), $i++ (Isso fala q ta sempre somando de 1 em 1 ate chegar no objetivo do bloco anterior)
    for($i = 1; $i < 11; $i++){
        echo "<br> Valor de i é: $i";
    }


    echo "<br>";


    echo "<hr><h3>Exercício 9</h3>";
    //ex09
    //Explicação: Primeiro eu defini uma variavel controle, dei a ela o numero 10, ai eu falo enquanto o $i2 (variavel) for maior que 0 ele vai mostrar a variavel e vai reduzir em -1 o numero na variavel, e o processo se repete ate ser o menor numero maior que 0
    $i2 = 10;
    while ($i2 > 0){
        echo "<br> $i2";
        $i2--;
    }



    echo "<hr><h3>Exercício 10</h3>";
    //ex10
    // Declaração
    $pessoas = ["Renan", "Gustavo", "Luis", "Caio", "Leon"];


    $quantidade = count($pessoas);


    $iPesPri = 0;
    $iPesUlt = $quantidade - 1;


    echo "<br>";


    // Acessando valores
    echo $pessoas[$iPesPri];
    echo "<br>";
    echo $pessoas[$iPesUlt];



    echo "<br> <br>";



    echo "<hr><h3>Exercício 11</h3>";
    //11
    $comidas = ["arroz", "feijao", "carne"];
    foreach ($comidas as $comida){
        echo "<p>$comida</p>";
    }


    echo "<hr><h3>Exercício 12</h3>";
    //12
    $numeroX = 2;
    $dobroNumeroX = $numeroX * 2;


    echo "<br>O dobro do seu numero é $dobroNumeroX";




    echo "<br>";





    //12 Function
    function dobro($x){
        $dobro = $x*2;
        return $dobro;
    }



    echo "<br> <br>";



    $numeroD = dobro(20);
    echo "O seu dobro 2 é $numeroD";
    echo "<br> <br>";





    echo "<hr><h3>Exercício 13</h3>";
    //13
    $nota1 = 10;
    $nota2 = 2;
    $nota3 = 9;


    $media = ($nota1 + $nota2 + $nota3) / 3;


    if($media >= 6){
        echo "Você esta acima da media, sua media é $media";
    }
    else{
        echo "Você esta abaixo da media, sua media é $media";
    }
    




    echo "<br> <br>";



    echo "<hr><h3>Exercício 14</h3>";
    //14
    $numeroTabuada = 4;


    for($i = 1; $i < 11; $i++){
        echo "<br>" . $numeroTabuada * $i;
    }




    echo "<br> <br>";



    echo "<hr><h3>Exercício 15</h3>";
    //15
    $listaPrecos = [10, 20, 30, 1, 2, 3];
    $total = array_sum($listaPrecos);
    echo $total;



    echo "<br> <br>";


    
    echo "<hr><h3>Exercício 16</h3>";
    //16
    function maiorNumero($x, $y){
        if($x > $y){
            echo "Seu primeiro numero ($x) é maior que o segundo ($y)";
        }
        elseif($x < $y){
            echo "Seu segundo numero ($y) é maior que o primeiro ($x)";
        }
        else{
            echo "Seus numeros sao iguais";
        }
    }


    maiorNumero(5,5);



    //Ou asssim:
    //$maior = max($x, $y);


    echo "<br> <br>";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<hr><h3>Exercício 17</h3>
    <form action="index.php" method="POST">
        <label>Digite seu nome:</label>
        <input type="text" placeholder="Fulano" name="txtnome">
        <!-- Da pra fazer esse botao de enviar assim tmb: <input type="submit" value="Enviar">-->
        <button type="submit">Enviar</button>
        <br>
    </form>




    <hr><h3>Exercício 18</h3>
    <form action=index.php method="POST">
        <label >Numero 1:</label>
        <input type="number" name="numero1">



        <label></label>
            <select name="op">
                <option type="txt" name="soma">+</option>
                <option type="txt" name="subtracao">-</option>
                <option type="txt" name="multiplicacao">×</option>
                <option type="txt" name="divisao">÷</option>
            </select>



        <label>Numero 2:</label>
        <input type="number" name="numero2">


        <button type="submit">Enviar</button>
    </form>




	<hr><h3>Exercício 19</h3>
    <form action=index.php method="POST">
        <label>Digite seu nome:</label>
        <input type="text" placeholder="Pessoa1" name="nomePessoa">


        <label>Em que ano vc nasceu?</label>
        <input type="number" name="anoNasc">


        <button type="submit">Enviar</button>
    </form>



</body>
</html>



<?php
    //17
    if(isset($_POST["txtnome"])){
        echo "Bem vindo " . $_POST["txtnome"];
    }



    //18
    if(isset($_POST["numero1"], $_POST["numero2"], $_POST["op"])){ // So precisa disso pra nao ficar aparecendo msg que nao tem nada na variavel "if(isset($_POST["numero1"], $_POST["numero2"], $_POST["op"]))"


        $num1 = $_POST["numero1"];
        $num2 = $_POST["numero2"];
        $op = $_POST["op"];



        $soma = $num1 + $num2;
        $sub = $num1 - $num2;
        $mult = $num1 * $num2;
        $div = $num1 / $num2;


        if($op == "+"){
            echo $soma;
        }
        elseif($op == "-"){
            echo $sub;
        }
        elseif($op == "×"){
            echo $mult;
        }
        else{
            echo $div;
        }
    }



    //19
    if(isset($_POST["anoNasc"], $_POST["nomePessoa"])){


        $anoAtual = 2026;
        $anoNasc = $_POST["anoNasc"];
        $idade = $anoAtual - $anoNasc;
        $nomePess = $_POST["nomePessoa"]; 


        if($idade >= 18){
            $maioridade = "maior";
        }
        else{
            $maioridade = "menor";
        }


        echo "Ola " .  $nomePess . " voce tem " . $idade . " dito isso, vc é de " . $maioridade . ".";
    }

	echo "<hr><h3>Exercício 20</h3>";
    //20
    $lista = [
	[
		"nome" => "arroz",
		"preço" => 10
	],

	[
		"nome" => "feijão",
		"preço" => 20
	],
	[
		"nome" => "carne",
		"preço" => 30
	],

	[
		"nome" => "batata",
		"preço" => 1
	],

	[
		"nome" => "cenoura",
		"preço" => 2
	]
	];

	foreach($lista as $produto){
		echo "<p>Produto " . $produto["nome"] . " custa R$" . $produto["preço"] . "</p>";
	}

	$total = array_sum(array_column($lista, 'preço'));
    echo "Total: R$" . $total;

    echo "<br>";

	$maior = max(array_column($lista, 'preço'));
    echo "<br> Maior preço: R$" . $maior;

    echo "<br>";

?>
