<?php

class Pessoa{

    private string $nome;
    private int $idade;
    private string $corDosOlhos;
    private string $genero;
    private float $altura; 
    private float $peso;
    

    public function colocarNome(string $nome)
    {
        $this->nome = $nome;
        echo $nome."<br>";
    }

    public function colocarIdade(int $idade)
    {
        $this->idade = $idade;
        echo $idade."<br>";
    }

    public function colocarCorOlhos(string $corDosOlhos)
    {   
        switch($corDosOlhos)
        {
            case "Preto":
                $this->corDosOlhos = "Preto";
                break;
            case "Azul":
                $this->corDosOlhos = "Azul";
                break;
            case "Verde":
                $this->corDosOlhos = "Verde";
                break;
            case "Castanho":
                $this->corDosOlhos = "Castanho";
                break;
            default:
                $this->corDosOlhos = "Cor Invalida";
                break;
        }
        
    
    }
    public function colocarGenero(string $genero)
    {
        
        if($genero == 'M'){
            $this->genero = "Masculino";
        }else{
            $this->genero = "Feminino";
        }
        echo $this->genero."<br>";
    }

    public function colocarAltura(float $altura)
    {
        $this->altura = $altura;
        echo $altura."<br>";
    }

    public function colocarPeso(float $peso)
    {
        $this->peso = $peso;
        echo $peso."<br>";
    }

}


$Pessoa1 = new Pessoa();

$Pessoa1->colocarNome("Ana");
$Pessoa1->colocarIdade(21);
$Pessoa1->colocarCorOlhos("Vermelho");
$Pessoa1->colocarPeso(75);
$Pessoa1->colocarGenero('M');
$Pessoa1->colocarAltura(1.70);







?>