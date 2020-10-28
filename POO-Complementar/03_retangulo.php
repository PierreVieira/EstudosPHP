<?php

class Retangulo
{
    private $ladoA;
    private $ladoB;

    /**
     * Retangulo constructor.
     * @param $ladoA
     * @param $ladoB
     */
    public function __construct($ladoA, $ladoB)
    {
        $this->mudarValorLados($ladoA, $ladoB);
    }

    public function mudarValorLados($ladoA, $ladoB)
    {
        $this->ladoA = $ladoA;
        $this->ladoB = $ladoB;
    }

    public function retornarValorLados(): array
    {
        return array(
            'ladoA' => $this->ladoA,
            'ladoB' => $this->ladoB,
        );
    }

    public function calcularPerimetro()
    {
        return 2 * ($this->ladoA + $this->ladoB);
    }

    public function calcularArea()
    {
        return $this->ladoA * $this->ladoB;
    }
}

echo "Informe um dos lados do terreno: ";
$ladoA = readline();
echo "Informe o outro lado do terreno: ";
$ladoB = readline();
$retangulo = new Retangulo($ladoA, $ladoB);
echo "Quantidade de pisos necessários para o local: " . $retangulo->calcularArea() . " unidades de área\n";
echo "Quantidade de rodapés necessários para o local: " . $retangulo->calcularPerimetro() . " unidades de comprimento\n";
