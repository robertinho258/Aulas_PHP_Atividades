<?php


/*

O for é a estrutura de repetição do PHP que utilizamos quando sabemos a quantidade de repetições que devem
ser executadas.

*/

for ($numero1 = 0;$numero1 <= 10; $numero1++)
{
 echo $numero1."<br>";
}

/* O foreach pecorre todo vertor sem precisar de um indicie para indicar qual tem que ser no momento*/ 

//EXEMPLO SEM O FOREACH

$lista = array("Maça","Banana","Uva","Pera");

for($i=0; $i <4; $i++)
{
    $item =$lista[$i];
    echo $item."<br>";
}

//EXEMPLO COM FOREACH

foreach($lista as $frutas)
{
    echo $frutas."<br>";
}

/*
As estruturas de repetição possuem um comando para finalizar um loop caso seja necessário: o
comando break. Com ele podemos interromper a execução de um loop a qualquer momento.
*/


$pararLoop = 9;

for($numero = 0; ; $numero++){
if($numero == $pararLoop){
break;
}
echo $numero."<br>";
}


/*
Podemos usar o comando continue em uma estrutura de repetição para fazer com que os comandos
subsequentes do bloco de código sejam desconsiderados e uma nova iteração iniciada.
*/

for($i = 0; $i < 10; $i++){
if($i % 2 == 0){
continue;
}
echo $i."<br>";
}


/*

O while é a estrutura de repetição mais simples do PHP. Com ele informamos que um bloco de
código deve ser repetido enquanto a condição declarada for verdadeira.

*/

$i = 1;
while ($i <= 10) {
echo $i;
$i++;
}

/* do... while 
Exemplo errado no PDF
*/


/*
funcoes

*/ 
//ESCOPO LOCAL E ESCOPO GLOBAL


$globalName = "Plinio";
function Hello() {
$localName = "Cesar";
echo "Olá, $localName!<br>";
}
Hello();
echo "globalName: $globalname <br>";
echo "localName: $localName <br>";


?>
