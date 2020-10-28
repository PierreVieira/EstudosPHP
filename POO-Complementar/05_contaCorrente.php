<?php
class ContaCorrente {
    private $numeroConta;
    private $nomeCorrentista;
    private $saldo;

    /**
     * ContaCorrente constructor.
     * @param $numeroConta
     * @param $nomeCorrentista
     * @param $saldo
     */
    public function __construct($numeroConta, $nomeCorrentista, $saldo=0)
    {
        $this->numeroConta = $numeroConta;
        $this->nomeCorrentista = $nomeCorrentista;
        $this->saldo = $saldo;
    }

    /**
     * @param mixed $nomeCorrentista
     */
    public function alterarNome($nomeCorrentista): void
    {
        $this->nomeCorrentista = $nomeCorrentista;
    }

    public function deposito($valor) {
        $this->saldo += $valor;
    }

    public function saque($valor) {
        $this->saldo -= $valor <= $this->saldo ? $valor : 0;
    }

}
