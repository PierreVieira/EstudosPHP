<?php

class Veiculo
{
    protected $marca;
    protected $qtdRodas;
    protected $modelo;
    protected $velocidade;

    /**
     * Veiculo constructor.
     * @param $marca
     * @param $qtdRodas
     * @param $modelo
     */
    public function __construct($marca, $qtdRodas, $modelo)
    {
        $this->marca = $marca;
        $this->qtdRodas = $qtdRodas;
        $this->modelo = $modelo;
        $this->velocidade = 0;
    }

    public function imprimirInformacoes()
    {
        echo "Atributo marca: $this->marca\n";
        echo "Atributo qtdRodas: $this->qtdRodas\n";
        echo "Atributo modelo: $this->modelo\n";
        echo "Atributo velocidade: $this->velocidade\n";
    }

    public function acelerar($valor)
    {
        $this->velocidade += $valor;
    }

    public function frear($valor)
    {
        $this->velocidade -= $valor;
    }

    /**
     * @return mixed
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * @param mixed $marca
     */
    public function setMarca($marca): void
    {
        $this->marca = $marca;
    }

    /**
     * @return mixed
     */
    public function getQtdRodas()
    {
        return $this->qtdRodas;
    }

    /**
     * @param mixed $qtdRodas
     */
    public function setQtdRodas($qtdRodas): void
    {
        $this->qtdRodas = $qtdRodas;
    }

    /**
     * @return mixed
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * @param mixed $modelo
     */
    public function setModelo($modelo): void
    {
        $this->modelo = $modelo;
    }

    /**
     * @return int
     */
    public function getVelocidade(): int
    {
        return $this->velocidade;
    }

    /**
     * @param int $velocidade
     */
    public function setVelocidade(int $velocidade): void
    {
        $this->velocidade = $velocidade;
    }

}

class Automovel extends Veiculo
{
    protected $potenciaDoMotor;

    /**
     * Automovel constructor.
     * @param $potenciaDoMotor
     */
    public function __construct($potenciaDoMotor, $marca, $qtdRodas, $modelo)
    {
        parent::__construct($marca, $qtdRodas, $modelo);
        $this->potenciaDoMotor = $potenciaDoMotor;
    }

    public function imprimirInformacoes()
    {
        parent::imprimirInformacoes(); // TODO: Change the autogenerated stub
        echo "Atributo velocidade: $this->potenciaDoMotor\n";
        echo "Atributo marca: $this->marca\n";
        echo "Atributo qtdRodas: $this->qtdRodas\n";
        echo "Atributo modelo: $this->modelo\n";
        echo "Atributo velocidade: $this->velocidade\n";
    }

    /**
     * @return mixed
     */
    public function getPotenciaDoMotor()
    {
        return $this->potenciaDoMotor;
    }

    /**
     * @param mixed $potenciaDoMotor
     */
    public function setPotenciaDoMotor($potenciaDoMotor): void
    {
        $this->potenciaDoMotor = $potenciaDoMotor;
    }


}

class Bicicleta extends Veiculo
{
    private $numMarchas;
    private $bagageiro;

    public function __construct($numMarchas, $bagageiro, $marca, $qtdRodas, $modelo)
    {
        parent::__construct($marca, $qtdRodas, $modelo);
        $this->numMarchas = $numMarchas;
        $this->bagageiro = $bagageiro;
    }

    public function imprimirInformacoes()
    {
        parent::imprimirInformacoes(); // TODO: Change the autogenerated stub
        echo "Atributo numMarchas: $this->numMarchas\n";
        echo "Atributo bagageiro: $this->bagageiro\n";
        echo "Atributo marca: $this->marca\n";
        echo "Atributo qtdRodas: $this->qtdRodas\n";
        echo "Atributo modelo: $this->modelo\n";
        echo "Atributo velocidade: $this->velocidade\n";
    }

    /**
     * @return mixed
     */
    public function getNumMarchas()
    {
        return $this->numMarchas;
    }

    /**
     * @param mixed $numMarchas
     */
    public function setNumMarchas($numMarchas): void
    {
        $this->numMarchas = $numMarchas;
    }

    /**
     * @return mixed
     */
    public function getBagageiro()
    {
        return $this->bagageiro;
    }

    /**
     * @param mixed $bagageiro
     */
    public function setBagageiro($bagageiro): void
    {
        $this->bagageiro = $bagageiro;
    }


}

class Moto extends Automovel
{
    private $partidaEletrica;

    public function __construct($partidaEletrica, $potenciaDoMotor, $marca, $qtdRodas, $modelo)
    {
        parent::__construct($potenciaDoMotor, $marca, $qtdRodas, $modelo);
        $this->partidaEletrica = $partidaEletrica;
    }

    /**
     * @return mixed
     */
    public function getPartidaEletrica()
    {
        return $this->partidaEletrica;
    }

    /**
     * @param mixed $partidaEletrica
     */
    public function setPartidaEletrica($partidaEletrica): void
    {
        $this->partidaEletrica = $partidaEletrica;
    }

    public function imprimirInformacoes()
    {
        parent::imprimirInformacoes(); // TODO: Change the autogenerated stub
        echo "Atributo partidaEletrica: $this->partidaEletrica\n";
        echo "Atributo velocidade: $this->potenciaDoMotor\n";
        echo "Atributo marca: $this->marca\n";
        echo "Atributo qtdRodas: $this->qtdRodas\n";
        echo "Atributo modelo: $this->modelo\n";
        echo "Atributo velocidade: $this->velocidade\n";
    }
}

class Carro extends Automovel
{
    private $qtdPortas;

    public function __construct($qtdPortas, $potenciaDoMotor, $marca, $qtdRodas, $modelo)
    {
        parent::__construct($potenciaDoMotor, $marca, $qtdRodas, $modelo);
        $qtdRodas = $this->qtdRodas;
    }

    public function imprimirInformacoes()
    {
        parent::imprimirInformacoes(); // TODO: Change the autogenerated stub
        echo "Atributo qtdRodas: $this->qtdRodas\n";
        echo "Atributo velocidade: $this->potenciaDoMotor\n";
        echo "Atributo marca: $this->marca\n";
        echo "Atributo qtdRodas: $this->qtdRodas\n";
        echo "Atributo modelo: $this->modelo\n";
        echo "Atributo velocidade: $this->velocidade\n";
    }
}
