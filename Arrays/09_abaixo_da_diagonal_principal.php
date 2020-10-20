<?php
$matriz = [];

//Lendo a matriz 4x4
for ($i = 0; $i < 4; ++$i) {
    $linha = [];
    for ($j = 0; $j < 4; ++$j) {
        echo "Informe o valor da posição $i x $j: ";
        $numero = readline();
        array_push($linha, $numero);
    }
    array_push($matriz, $linha);
}

//Calculando a soma dos elementos abaixo da diagonal principal
$soma = 0;
for ($i = 1; $i < 4; ++$i) {
    for ($j = 0; $j < $i; ++$j) {
        $soma += $matriz[$i][$j];
    }
}
echo "Soma dos elementos da matriz: $soma";
