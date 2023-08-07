<?php

/*3- Crie uma função em PHP que calcule e imprima o salário reajustado de um funcionário
de acordo com a seguinte regra:
• salários até R$ 3.000,00 , reajuste de 50%
• salários de R$ 3.000,00 ou mais, reajuste de 30%*/


function salarioreajuste($salario){
    if ($salario <= 3000) {
        $reajuste = $salario * 0.50;
    }else{
        $reajuste = $salario * 0.30;
    }

    $salarioreajust = $salario + $reajuste;

    echo "Seu salario era R$:".$salario."<br>";
    echo "Reajuste R$:".$reajuste."<br>";
    echo "Salario reajustado R$:".$salarioreajust."<br>";
}

$salariodofunc = 2600;
salarioreajuste($salariodofunc);

?>
