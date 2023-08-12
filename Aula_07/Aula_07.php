<?php


class Carro
{
    private string $cor; // privado
    private int $portas; // privado
    private int $velocidade; //privado
    public bool $faroisLigados; // publico 
    public bool $transmissaoManual; //publico


    


    public function __construct(int $portas, string $cor) //construct é tipo uma constante difcilmente vai ser mudada.
    {
        $this->portas = $portas;
        $this->cor = $cor;
    }


    public function getCor(): string
    {
        return $this->cor;
    }


    public function setVelocidade(int $velocidade): void
    {
        if($velocidade < 0) {
            echo "Não é possível setar uma velocidade negativa";


            return;
        }


        $this->velocidade = $velocidade;
    }


    public function getVelocidade(): int
    {
        return $this->velocidade;
    }


    public function setFarois(bool $faroisLigados): void
    {
        $this->faroisLigados = $faroisLigados;
    }


    public function setTransmissaoManual(bool $transmissaoManual): void
    {
        $this->transmissaoManual = $transmissaoManual;
    }
}
