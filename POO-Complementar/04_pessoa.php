<?php

class Pessoa
{
    private $nome;
    private $idade;
    private $peso;
    private $altura;

    /**
     * Pessoa constructor.
     * @param $nome
     * @param $idade
     * @param $peso
     * @param $altura
     */
    public function __construct($nome, $idade, $peso, $altura)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->peso = $peso;
        $this->altura = $altura;
    }

    public function engordar($quantiadeQuilos)
    {
        $this->peso += $quantiadeQuilos;
    }

    public function emagrecer($quantidadeQuilos)
    {
        $this->peso -= $quantidadeQuilos;
    }

    public function envelhecer()
    {
        $this->idade++;
        if ($this->idade <= 21) {
            $this->crescer(0.5);
        }
    }

    public function crescer($quantidadeMetros)
    {
        $this->altura += $quantidadeMetros;
    }
}