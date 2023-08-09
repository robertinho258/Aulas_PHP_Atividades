<html>

<head>

<title>Jogo Cara ou Coroa</title>

<meta charset=”UTF-8”>

</head>

<body>

<h1>Jogo Cara ou Coroa</h1>

<?php

$vezes = 0;

// Simular 50 lançamentos de uma moeda.
// mostrando a respectiva imagem para cara ou coroa em cada um dos lançamentos.

do{
$caraoucoroa = rand(1,2);
    if($caraoucoroa == 1){
        echo "<img src=img/cara.jpg width=8%>"." ";
            $contagemcara += 1;    
    }else{
        echo "<img src=img/coroa.jpg width=8%>"." ";
            $contagemcoroa += 1;   
    }
    $vezes++;
}while($vezes < 50);

// Exibir a porcentagem de caras e coroas que foram sorteadas.

echo ($contagemcoroa/50)*100 . "%<br>";
echo ($contagemcara/50)*100 . "%";


?>

</body>

</html>

