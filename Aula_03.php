<?php

/*Operadores aritimericos
Adição +
Subtração -
Multiplicação *
Divisão /
Modulo Resto de Divisão %
*/

$var1 = 10; 
$var2 = 5;
$var3 = 7;

echo $var1 * $var2;
  
echo $var1 / $var2;
 
echo $var1 + $var2;
 
echo $var1 - $var2;
  
echo $var1 % $var2;
 

/*Operando de Incrementos*/
echo "Operando de Incrementos";
 

echo -$var1;
 
echo ++$var1;
 
echo --$var1;
 
echo $var1++;
 
echo $var1--;
 

/*Atribuição Simples*/
echo "Atribuição Simples";
 


echo $var1 = 5;
 
echo $var1 += 5;
 
echo $var1 -= 5;
 
echo $var1 *= 5;
 
echo $var1 /= 5;
 
echo $var1 %= 5;
 

/*Precedencia de Operadores*/
$var30 = 25;
$var20 = 40;

echo "Pecedencia de Operadores";
 
echo ($var30 * $var20) * 2;
 
echo $var30 +=($var20 * 2);
 


/*Operadores de Comparação*/

echo "Operadores de Comparação";
 

$var4 = 10;
$var5 = 20;

var_dump($var4 == $var5);
 
var_dump ($var4 === $var5);
 
var_dump($var4 != $var5);
 
var_dump($var4 !== $var5);
 
var_dump($var4 < $var5);
 
var_dump($var4 > $var5);
 
var_dump($var4 <= $var5);
 
var_dump($var4 >= $var5);
 


/*Operadores Logicos*/

echo "Operadores Logicos";
 

$ol = 10;
$ol2 = 15;

var_dump ($ol < $ol2) and ($ol > $ol2);
var_dump ($ol < $ol2) or ($ol > $ol2);
var_dump ($ol < $ol2) xor ($ol > $ol2);


/*Estrutura Condional*/

echo "Estrutura Condicional";
 

$teste1 = 10;

if (1 < $teste1)
{
 echo "Sim";
     
}
else
{
 echo "Não";
     
}


if (10 < $teste1)
{
echo "Numero menor que tal";
     
}
else if (10 > $teste1)
{
echo "Numero maior que tal";
     
}
else
{
 echo "Então o numero é igual";
     
}

/*Operador Switch*/

$opcao = 2;

switch($opcao){

   case 1:
        echo "Caso 1";
    break;
   case 2:
        echo "Caso 2";
    break;
   case 3:
        echo "Caso 3";
    break;
default;
    echo "Nenhuma Opção";
    break;
}

?>