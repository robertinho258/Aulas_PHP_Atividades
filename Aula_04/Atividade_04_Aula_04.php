<?php

/*Seu salário atual é de R$5.000,00. O do seu colega é de R$2.500,00. Suponha que você
tenha 10% de aumento todo ano e seu colega 20%. Crie um script que calcula em quantos anos
seu colega irá passar a ganhar mais que você.*/

$meusalario = 5.000;
$colegasalario = 2.500;
$anos = 0;

while ($colegasalario <= $meusalario){
    $meusalario += $meusalario * 0.10;
    $colegasalario += $colegasalario * 0.20;
    $anos++;
}

echo "Nosso colega ira ganhar mais em $anos de empresa";


?>