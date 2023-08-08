<?php

/* Importar arquivo na nossa pagina*/

include "user.php";



/*Tem que achar o arquivo e tem que estar funcionando */ 
require "user.php";

// _once significa uma vez importado uma vez

//Manipulação e Arrays.

// Arrays Numericos,acossiativos,multidimencional.

// Array numerico

$array = [“banana”, “abacaxi”, “uva”];
var_dump($array);

//Array Acossiativo

$meuArray = array(
'nome' => 'Plinio',
'sobrenome' => 'Pavin',
'telefone' => '3345-4233'
);
print_r($meuArray);

//Arrays Multidimencionais

$cliente = [
    “nome” => “Plinio”,
    “Sobrenome” => “Pavin”,
    “telefones” => [“fixo” => “3383-2441”,“celular” => “19 9 98095744”],];
    var_dump($cliente);

//Contando Elementos em um Array

count("Nome do Arary") 

//Operaçoes com Arrays

/* Somar + 
Ingualdade ==
Identintico ===
Desigualdade !=,<>
Não Identidade !== */

$arrayA = array(
    'r' => 'Red',
    'b' => 'Blue',
    'y' => 'Yellow' ,
    );
    $arrayB = array(
    'b' => 'Black' ,
    'w' => 'White' ,
    'p' => 'Pink',
    );
    $arrayC = $arrayA + $arrayB;
    print_r( $arrayC);


// Tem outra função chamada array_merge.

// Comparação de Arrays 
$arrayA = array(
    'b' => 'Black' ,
    'w' => 'White' ,
    'g' => 'Gray' ,
    'p' => 'pink' ,
    );
    $arrayB = array(
    'g' => 'Gray' ,
    'b' => 'Black' ,
    'w' => 'White' ,
    );
    //Verificando se os dois Arrays não são iguais:
    var_dump( $arrayA <> $arrayB); //bool(true)
    //Verificando se os dois Arrays não são idênticos:
    var_dump( $arrayA !== $arrayB); //bool(true)

//Ordenando Arrays com funcoes asort() "numericos" e arsort() "associativos"



/*Ordenando arrays
Podemos ordenar arrays utilizando as funções asort() e arsort() do php, para arays numéricos e
associativos respectivamente.*/ 

$frutas = array("d" => "limao", "a" => "laranja", "b" => "banana", "c" =>
"melancia");
asort($frutas);
var_dump($frutas);
$frutas = array("d" => "limao", "a" => "laranja", "b" => "banana", "c" =>
"melancia");
arsort($frutas);
var_dump($frutas);

/* Funções de Array (array_diff)
Serve para encontrar diferença entre arrays, retorna um array com os elementos de um array que
não existem num segundo array:*/ 

$array1 = array("a" => "verde", "vermelho", "azul", "vermelho");
$array2 = array("b" => "verde", "amarelo", "vermelho");
$result = array_diff($array1, $array2);
print_r($result);


/*Criar diretório
Para criar um diretório utilizamos a função mkdir(), conforme o exemplo abaixo. */ 

$name = "images";
if (!is_dir($name)) //Se o diretório não existir
{
mkdir($name); //cria o diretório
}

/*Remover diretório
Para remover um diretório existente, utilizamos a função rmdir(), conforme o exemplo abaixo.*/ 
$name = "images";
if (is_dir($name)) //Se o diretório existir
{
rmdir($name); //remove o diretório
}

/*Ler arquivos de um diretório
Para ler todos os arquivos de um diretório, podemos utilizar a função scandir(), que retorna um
array com todos os arquivos do diretório informado. Veja o exemplo abaixo:*/ 

$dir = '/images';
$files1 = scandir($dir);
print_r($files1);

/*Criar um arquivo
Vamos criar um arquivo e adicionar conteúdo a ele, para isso, usamos as funções: fopen, fwrite e
fclose.*/ 

$arquivo = fopen("lista.txt", "a");
fwrite($arquivo, "Minha primeira linha" . PHP_EOL);
fwrite($arquivo, "Minha segunda linha" . PHP_EOL);
fwrite($arquivo, "Minha terceira linha" . PHP_EOL);
fclose($arquivo);

/* Gravar em um arquivo
Além de fwrite(), podemos usar file_put_contents() para gravar dados em um arquivo:*/ 

$arquivo = 'lista.txt';
$item = "Sabonete\n";
file_put_contents($arquivo, $item);

/*Ler o conteúdo de um arquivo
Vamos ler o conteúdo do arquivo. Para isso usamos as funções fopen, fread e fwrite.*/

$arquivo = fopen ("lista.txt", "r");
$conteudo = fread ($arquivo, filesize ("lista.txt"));
fclose ($arquivo);
echo $conteudo;



?>