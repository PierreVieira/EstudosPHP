<?php

class Carro
{
    private $consumoCombustivel;
    private $quantiadeCombustivel;

    /**
     * Carro constructor.
     * @param $consumoCombustivel
     */
    public function __construct($consumoCombustivel)
    {
        $this->consumoCombustivel = $consumoCombustivel;
        $this->quantiadeCombustivel = 0;
    }

    public function andar()
    {
        if ($this->quantiadeCombustivel > 0) {
            $this->quantiadeCombustivel--;
        }
    }

    public function obterGasolina()
    {
        return $this->quantiadeCombustivel;
    }

    public function adicionarGasolina($quantidadeGasolina)
    {
        $this->quantiadeCombustivel = $quantidadeGasolina;
    }
}