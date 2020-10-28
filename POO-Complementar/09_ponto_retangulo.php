<?php

class Ponto
{
    private $x;
    private $y;

    /**
     * Ponto constructor.
     * @param $x
     * @param $y
     */
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param mixed $x
     */
    public function setX($x): void
    {
        $this->x = $x;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param mixed $y
     */
    public function setY($y): void
    {
        $this->y = $y;
    }

    public function imprimirValores(): void
    {
        echo "(" . $this->x . ", " . $this->y . ")\n";
    }
}

class Retangulo
{
    private $largura;
    private $altura;
    private Ponto $verticeOrigem;

    /**
     * Retangulo constructor.
     * @param $largura
     * @param $altura
     * @param Ponto $verticeOrigem
     */
    public function __construct($largura, $altura, Ponto $verticeOrigem)
    {
        $this->largura = $largura;
        $this->altura = $altura;
        $this->verticeOrigem = $verticeOrigem;
    }

    public function encontrarCentro()
    {
        return new Ponto(($this->verticeOrigem->getX() + $this->largura) / 2, ($this->verticeOrigem->getY() + $this->altura) / 2);
    }

    public function imprimirCentro()
    {
        $this->encontrarCentro()->imprimirValores();
    }
}

$retangulo1 = new Retangulo(10, 20, new Ponto(0, 0));
$retangulo2 = new Retangulo(10, 15, new Ponto(0, 5));
$retangulo3 = new Retangulo(-10, -15, new Ponto(10, 5));

echo "Centro do retângulo 1: ";
$retangulo1->imprimirCentro();
echo "Centro do retângulo 2: ";
$retangulo2->imprimirCentro();
echo "Centro do retângulo 3: ";
$retangulo3->imprimirCentro();