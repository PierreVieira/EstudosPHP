<?php
function verificaPositivo($valor) {
    /* O fim do enunciado pede para implementar essa função que verifica se um determinado é ou não positivo.
    * Não entendi muito o propósito dela para o contexto desse programa (acredito que foi algum erro de digitação),
    * mas de toda forma estou deixando ela aqui.*/
    return $valor > 0;
}
$G = [];
$i = 0;
//Lendo o vetor gabarito;
while ($i < 13) {
    do{
        echo "Informe um número para G[{$i}]: ";
        $numero = readline();
        if ($numero > 3 || $numero < 1) {
            echo "O número deve ser 1, 2 ou 3\n";
        }
    } while ($numero > 3 || $numero < 1);
    array_push($G, $numero);
    $i++;
}
//Pegando a informação de quantos apostadores são
echo "Informe a quantida de de apostadores: ";
$quantidadeApostadores = readline();
$i = 1;
while ($i <= $quantidadeApostadores) {
    echo "============== APOSTADOR {$i} ==============\n";
    $R = [];
    $j = 0;
    $quantidadeAcertos = 0;
    while ($j < 13) {
        do{
            echo "Informe um número para R[{$j}]: ";
            $numero = readline();
            if ($numero > 3 || $numero < 1) {
                echo "O número deve ser 1, 2 ou 3\n";
            }
        } while ($numero > 3 || $numero < 1);
        array_push($R, $numero);
        if ($R[$j] == $G[$j]){
            $quantidadeAcertos++;
        }
        $j++;
    }
    echo "Quantidade de acertos: $quantidadeAcertos\n";
    if ($quantidadeAcertos == 13) {
        echo "GANHADOR, PARABENS\n";
    }
    $i++;
}
