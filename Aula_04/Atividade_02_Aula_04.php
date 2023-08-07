<?php

/* Crie um script em PHP que crie um vetor de 5 elementos inteiros com valores aleatórios,
entre 0 e 10. Encontre e mostre o menor elemento e sua posição no vetor. */


$vetor = array(2, 7, 9, 4, 5);


$menor = $vetor[0];

$posicao = 0;

for ($i = 1; $i < 5; $i++) {

    if ($vetor[$i] < $menor) {

        $menor = $vetor[$i];
        $posicao = $i;
    }
}

echo "Menor: $menor <br>";
echo "Posição: $posicao";


?>
