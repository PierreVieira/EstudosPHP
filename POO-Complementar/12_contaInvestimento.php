<?php

class ContaInvestimento
{
    private $saldo;
    private $taxaJuros;

    /**
     * ContaInvestimento constructor.
     * @param $saldoIncial
     * @param $taxaJuros
     */
    public function __construct($saldoIncial, $taxaJuros)
    {
        $this->saldo = $saldoIncial;
        $this->taxaJuros = $taxaJuros;
    }

    public function adicionaJuros(){
        $this->saldo *= (1 + $this->taxaJuros);
    }

    /**
     * @return mixed
     */
    public function getSaldo()
    {
        return $this->saldo;
    }


}

$poupanca = new ContaInvestimento(100, 0.1);
for ($i = 0; $i < 5; ++$i) {
    $poupanca->adicionaJuros();
}
echo "Saldo na poupança: R$ " . $poupanca->getSaldo();
