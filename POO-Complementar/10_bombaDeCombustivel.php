<?php

class BombaDeCombustivel
{
    private $tipoCombustivel;
    private $valorLitro;
    private $quantidadeCombustivel;

    /**
     * BombaDeCombustivel constructor.
     * @param $tipoCombustivel
     * @param $valorLitro
     * @param $quantidadeCombustivel
     */
    public function __construct($tipoCombustivel, $valorLitro, $quantidadeCombustivel)
    {
        $this->tipoCombustivel = $tipoCombustivel;
        $this->valorLitro = $valorLitro;
        $this->quantidadeCombustivel = $quantidadeCombustivel;
    }

    public function abastecerPorValor()
    {
        echo "Informe a quantidae de litros que deseja abastecer: ";
        $quantidadeLitrosAbastecido = readline();
        $this->valorLitro += $quantidadeLitrosAbastecido;
        echo "Foram abastecidos " . $quantidadeLitrosAbastecido . "litros\n";
        echo "Devem ser pagos R$ " . $this->valorLitro * $quantidadeLitrosAbastecido . "\n";
    }

    public function alterarValor()
    {
        echo "Informe o novo valor: ";
        $novoValor = readline();
        $this->valorLitro = $novoValor;
        echo "Valor do combustível atualizado com sucesso!\n";
    }

    public function alterarCombustivel()
    {
        echo "Informe o novo tipo de combustivel: ";
        $novoTipoCombustivel = readline();
        $this->tipoCombustivel = $novoTipoCombustivel;
        echo "O tipo de combustivél foi alterado com sucesso!\n";
    }

    public function alteraQuantidadeCombustivel()
    {
        echo "Informe a nova quantidade de combustivel: ";
        $quantidadeCombustivel = readline();
        $this->quantidadeCombustivel = $quantidadeCombustivel;
        echo "Quantidade de combustível alterada com sucesso\n";
    }
}
