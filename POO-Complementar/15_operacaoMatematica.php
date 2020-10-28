<?php

class OperacaoMatematica
{
    private $valor1;
    private $valor2;

    /**
     * OperacaoMatematica constructor.
     * @param $valor1
     * @param $valor2
     */
    public function __construct($valor1, $valor2)
    {
        $this->valor1 = $valor1;
        $this->valor2 = $valor2;
    }

    public function soma()
    {
        return $this->valor1 + $this->valor2;
    }

    public function subtracao()
    {
        return $this->valor1 - $this->valor2;
    }

    public function multiplicacao()
    {
        return $this->valor1 * $this->valor2;
    }

    public function divisao()
    {
        return $this->valor1 / $this->valor2;
    }
}

echo "Informe um valor: ";
$v1 = readline();
echo "Informe outro valor: ";
$v2 = readline();
$operacao = new OperacaoMatematica($v1, $v2);
do{
    echo "[0] Somar valores\n";
    echo "[1] Subtrair valores\n";
    echo "[2] Multiplicar valores\n";
    echo "[3] Dividir valores\n";
    echo "------------------------\n";
    echo "Escolha uma opção: ";
    $opcao = readline();
    echo "------------------------\n";
}while($opcao < 0 || $opcao > 3);
switch ($opcao){
    case 0:
        echo "$v1 + $v2 = " . $operacao->soma();
        break;
    case 1:
        echo "$v1 - $v2 = " . $operacao->subtracao();
        break;
    case 2:
        echo "$v1 * $v2 = " . $operacao->multiplicacao();
        break;
    case 3:
        echo "$v1 / $v2 = " . $operacao->divisao();
        break;
    default:
        echo "IMPOSSÍVEL\n";
}