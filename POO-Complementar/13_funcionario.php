<?php

class Funcionario
{
    private $nome;
    private $salario;

    /**
     * Funcionario constructor.
     * @param $nome
     * @param $salario
     */
    public function __construct($nome, $salario)
    {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return mixed
     */
    public function getSalario()
    {
        return $this->salario;
    }

}

$funcionario = new Funcionario('Pedro', 2500);
echo "Nome do funcionário: " . $funcionario->getNome() . "\n";
echo "Salário do funcionário: R$ " . $funcionario->getSalario() . "\n";