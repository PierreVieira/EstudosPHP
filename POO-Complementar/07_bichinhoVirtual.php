<?php

class BichinhoVirtual
{
    private $nome;
    private $fome;
    private $saude;
    private $idade;

    /**
     * BichinhoVirtual constructor.
     * @param $nome
     * @param $fome
     * @param $saude
     * @param $idade
     */
    public function __construct($nome, $fome, $saude, $idade)
    {
        $this->nome = $nome;
        $this->fome = $fome;
        $this->saude = $saude;
        $this->idade = $idade;
    }

    /**
     * @return mixed
     */
    public function retornarNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function alterarNome($nome): void
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function retornarFome()
    {
        return $this->fome;
    }

    /**
     * @param mixed $fome
     */
    public function alterarFome($fome): void
    {
        $this->fome = $fome;
    }

    /**
     * @return mixed
     */
    public function retornarSaude()
    {
        return $this->saude;
    }

    /**
     * @param mixed $saude
     */
    public function alterarSaude($saude): void
    {
        $this->saude = $saude;
    }

    /**
     * @return mixed
     */
    public function retornarIdade()
    {
        return $this->idade;
    }

    /**
     * @param mixed $idade
     */
    public function alterarIdade($idade): void
    {
        $this->idade = $idade;
    }

    public function humor()
    {
        return $this->fome + $this->saude;
    }

}
