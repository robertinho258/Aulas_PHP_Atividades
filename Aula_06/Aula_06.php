<?php


class Carro {
    //Atributos
    public string $cor;
    public int $portas;
    public int $velocidade;
    public bool $faroisLigados;
    public bool $transmissaoManual;


    //Métodos
    public function setCor(string $cor): void
    {
        $this->cor = $cor;
    }


    public function getCor(): string
    {
        return $this->cor;
    }


    public function setVelocidade(int $velocidade): void
    {
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


    
    public function getFarois(): bool
    {
        return $this->faroisLigados;
    }


    public function setTransmissaoManual(bool $transmissaoManual): void
    {
        $this->transmissaoManual = $transmissaoManual;
    }


    public function getTransmissaoManual(): bool
    {
        return $this->transmissaoManual;
    }
}
