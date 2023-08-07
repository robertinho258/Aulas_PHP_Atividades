<?php

/* Crie uma função em PHP que receba a altura e o peso de uma pessoa, calcule seu IMC de acordo com a
fórmula abaixo:
IMC = Peso dividido pela altura ao quadrado ( peso ÷ (altura2)).
A função deve retornar uma string (magreza, normal. sobrepeso ou obesidade) de acordo com a tabela abaixo:
magreza < 18.5 | normal 18.5 a 24.9 |sobrepeso 24.9 a 30 |Obesidade > 30 */

function calIMC($altura,$peso){

    $imc = $peso / ($altura*$altura);

    if ($imc < 18.5) {
        return "Magreza";
    } elseif ($imc >= 18.5 and $imc <= 24.9) {
        return "Normal";
    } elseif ($imc >= 25 and $imc <= 30) {
        return "Sobrepeso";
    } else {
        return "Obesidade";
    }
}

$altura = 1.75;
$peso = 70;

$mensagemimc = calIMC($altura,$peso);
echo $mensagemimc;


?>