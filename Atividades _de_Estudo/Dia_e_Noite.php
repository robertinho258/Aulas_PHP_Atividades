<html>

<head>

<title>Exemplo com PHP</title>

<meta charset=”UTF-8”>

</head>

<body>

<h1>Dia e Noite</h1>

<?php

date_default_timezone_set('America/Sao_Paulo');

$hoje = date("d/m/Y"."<br>");

$agora = date("H:i"."<br>");

$hora = date('H');


/*Acrescentar ao exemplo desenvolvido na  a exibição da mensagem: 
“Bom dia”, “Boa tarde” ou “Boa noite”
 (veja a Figura 5.2), conforme a faixa de horário indicada na tabela a seguir:
*/  

$horacerta = date("H");

if ($horacerta > 23 or $horacerta < 6) {
    echo "Boa madrugada";
} elseif ($horacerta >= 6 and $horacerta < 12) {
    echo "Bom dia";
} elseif ($horacerta >= 12 and $horacerta < 18) {
    echo "Boa tarde";
} else {
    echo "Boa noite";
}

if ($hora < 6 or $hora > 18){

echo "<img src='img/lua.png'>";
}
else{

echo "<img src='img/sol.png'>";
}
echo $horacerta."Hoje é dia ". $hoje." e agora são ". $agora." horas."."<br>";

?>

</body>

</html>