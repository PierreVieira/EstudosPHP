<?php

class Quadrado
{
    private $tamanho_do_lado;

    /**
     * Quadrado constructor.
     * @param $tamanho_do_lado
     */
    public function __construct($tamanho_do_lado)
    {
        $this->tamanho_do_lado = $tamanho_do_lado;
    }

    /**
     * @return mixed
     */
    public function retornarValorDoLado()
    {
        return $this->tamanho_do_lado;
    }

    /**
     * @param mixed $tamanho_do_lado
     */
    public function mudarValorDoLado($tamanho_do_lado): void
    {
        $this->tamanho_do_lado = $tamanho_do_lado;
    }

    public function calcularArea()
    {
        return $this->tamanho_do_lado ** 2;
    }
}