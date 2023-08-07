<?php
/* 1- Crie uma função que receba 2 valores inteiros como argumentos e retorne a sua soma.
Se o valor da soma for negativo a função deverá o valor 0.*/

function soma($num1,$num2){

    $soma = $num1 + $num2;

    if ($soma < 0){
        return 0;
    }else {
        return $soma;
    }

}

$teste1 = 10;
$teste2 = -20;

$resultadosoma = soma($teste1,$teste2);

echo "A soma é:$resultadosoma";

?>