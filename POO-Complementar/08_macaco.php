<?php

class Macaco
{
    private $nome;
    private $bucho;

    /**
     * Macaco constructor.
     * @param $nome
     * @param $bucho
     */
    public function __construct($nome)
    {
        $this->nome = $nome;
        $this->bucho = [];
    }

    public function comer($alimento)
    {
        array_push($this->bucho, $alimento);
    }

    public function verBucho()
    {
        echo '[';
        for ($i = 0; $i < sizeof($this->bucho); ++$i) {
            if ($this->bucho[$i] != null) {
                if ($i < sizeof($this->bucho) - 1) {
                    echo $this->bucho[$i] . ', ';
                } else {
                    echo $this->bucho[$i] . ']';
                }
            }
        }
        echo "\n";
    }

    public function digerir()
    {
        for ($i = 0; $i < sizeof($this->bucho); ++$i) {
            if ($this->bucho[$i] != null) {
                $this->bucho[$i] = null; //Removendo o alimento mais antigo
                break;
            }
        }
    }

    public function __toString() : String
    {
        return $this->nome;
    }
}

$macaco1 = new Macaco('Macaco1');
$macaco2 = new Macaco('Macaco2');
$macaco1->comer('Banana');
$macaco1->comer('Maçã');
$macaco1->comer('Uva');
$macaco2->comer('Banana');
$macaco2->comer('Morango');
$macaco2->comer($macaco1);
$macaco1->verBucho();
$macaco2->verBucho();
//É sim possível que um macaco coma outro se estivermos considerando que o bucho do macaco é um array