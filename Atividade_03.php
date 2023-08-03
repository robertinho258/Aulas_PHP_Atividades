<?php

/*Termine o script abaixo. A variável $preco contém o valor da venda. Acrescente 12% ao
preço do produto, divida em 10 parcelas e mostre na tela o valor de cada parcela e o valor total
da compra.*/


$preco1 = 320;

$preco = ($preco1 * 1.12);

$parcelado = $preco / 10;


echo "Valor base R$ $preco1 <br>";

echo "Divido em 10x sairá por R$ $parcelado <br>E o valor toral será de R$ $preco";
echo "<br>";

?> 
