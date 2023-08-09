
<html>

<head>

<title>Sorteio de Numeros</title>

<meta charset=”UTF-8”>

</head>

<body>



<h1>Sorteio de Numeros</h1>

<?php
//Sortear 50 números inteiros entre 1 e 1000,
//exibindo na página apenas os números que são pares.

for ($i=0 ; $i < 50;$i++) 
{
    $numeros = rand(1,1000);
    if ($numeros % 2 == 0){
        echo $numeros." ";        
    }else{
       echo $numeros + 1.." ";
    }  
}
/* Sortear “n” números inteiros entre 1 e 1000, 
até que seja possível a exibição de 10 números
 sorteados que sejam múltiplos de 5.
*/



$contador = 0;
do{    
    $numero = rand(1,1000);
if ($numero % 5 == 0){
    echo $numero." ";
    $contador +=1;
    }
}while($contador < 10)

?>

</body>

</html>

