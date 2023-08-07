<?php

/*2- Crie uma função que receba 2 notas ($n1 e $n2) de um aluno. Essa função deve
retornar um booleano indicando se o aluno foi aprovado. Para ser aprovado, a soma das
notas deve ser igual ou superior a 19 e ambas devem ser superiores a 7.*/


function testeaprovacao($n1,$n2) {

    $somanotas = $n1 + $n2;

    if ($somanotas >= 14 and $n1 >= 7 and $n2 >=7){
        return true;
    } else {
        return false;
    }
}

$nota1 = 8;
$nota2 = 9;

if (testeaprovacao($nota1,$nota2)){
    echo "Aluno Aprovado!";
}else {
    echo "Aluno Reprovado!";
}


?>