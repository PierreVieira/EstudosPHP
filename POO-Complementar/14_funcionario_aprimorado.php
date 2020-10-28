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

    public function aumentarSalario($porcentualDeAumento)
    {
        //Se queremos dar um aumento de 75% por exemplo deve ser passado 75
        $this->salario *= (1 + ($porcentualDeAumento / 100));
    }
}
