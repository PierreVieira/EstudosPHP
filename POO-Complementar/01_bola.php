<?php

class Bola
{
    private $cor;
    private $circunferencia;
    private $material;

    /**
     * Bola constructor.
     * @param $cor
     * @param $circunferencia
     * @param $material
     */
    public function __construct($cor, $circunferencia, $material)
    {
        $this->cor = $cor;
        $this->circunferencia = $circunferencia;
        $this->material = $material;
    }

    /**
     * @return mixed
     */
    public function mostraCor()
    {
        return $this->cor;
    }

    /**
     * @param mixed $cor
     */
    public function trocaCor($cor): void
    {
        $this->cor = $cor;
    }

}