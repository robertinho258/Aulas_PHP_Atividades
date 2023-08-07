<?php

/*

Faça a soma dos elementos de mesmo índice, colocando o resultado em um terceiro vetor.
Imprima os três vetores, um após o outro. Obs: Utilize um for

*/

$vetor1 = array("20","50","10","30","40","70","60","80","90","100");
$vetor2 = array("22","55","11","33","44","77","66","88","99","111");
$vetorsoma = array();

for ($i = 0; $i < 10; $i++) {
    $vetorsoma[$i] = $vetor1[$i] + $vetor2[$i];
}

// Exibir os três vetores
echo "Vetor 1: " . implode(", ", $vetor1) . "<br>";
echo "Vetor 2: " . implode(", ", $vetor2) . "<br>";
echo "Vetor Soma: " . implode(", ", $vetorsoma) . "<br>";

?>

