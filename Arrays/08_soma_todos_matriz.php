<?php
$matriz = [];
$soma = 0;
//Lendo a matriz 2 x 3 e somando
for ($i = 0; $i < 2; ++$i) {
    $linha = [];
    for ($j = 0; $j < 3; ++$j) {
        echo "Informe o valor da posição $i x $j: ";
        $numero = readline();
        $soma += $numero;
        array_push($linha, $numero);
    }
    array_push($matriz, $linha);
}

echo "A soma dos elementos da matriz é igual a $soma\n";