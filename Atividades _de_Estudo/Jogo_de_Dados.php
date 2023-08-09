<html>

<head>

<title>Jogo de Dados</title>

<meta charset=”UTF-8”>

</head>

<body>

<h1>Jogo de Dados</h1>

<?php

/* Alterar o programa “Jogo de Dados” 
para realizar 20 lançamentos de dados, mostrando a imagem 
da respectiva face sorteada em cada um dos lançamentos.*/


$soma = 0;

do{
    $lado = rand (1, 6);
    
    if($lado == 1 ){
        $contagem1 += 1;
    }elseif($lado == 2){
        $contagem2 += 1;
    }elseif($lado == 3){
        $contagem3 += 1;
    }elseif($lado == 4){
        $contagem4 += 1;
    }elseif($lado == 5){
        $contagem5 += 1;
    }elseif($lado == 6){
        $contagem6 += 1;
    }
    echo "<img src=img/dado". $lado.".png>"." ";
    $lancamento++;
    $soma = $lado + $soma;
}while($lancamento < 20);

echo "<h1>Resultado:".$soma."<h1/><br>";

echo "<h1>Vezes que apareceu 1:".$contagem1."<br>";
echo "Vezes que apareceu 2:".$contagem2."<br>";
echo "Vezes que apareceu 3:".$contagem3."<br>";
echo "Vezes que apareceu 4:".$contagem4."<br>";
echo "Vezes que apareceu 5:".$contagem5."<br>";
echo "Vezes que apareceu 6:".$contagem6."<br>";

// Após os 20 lançamentos, exibir um sumário dos lançamentos realizados, ou seja, 
//mostrar quantas vezes cada uma das faces foi sorteada.
?>

</body>

</html>