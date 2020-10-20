<?php
/**
 * @param int $qtdeLinhas
 * @param int $qtdeColunas
 * @param array $matriz
 */
function printa_matriz(int $qtdeLinhas, int $qtdeColunas, array $matriz)
{
    echo "========== PRINTANDO MATRIZ ==========\n";
    for ($i = 0; $i < $qtdeLinhas; ++$i) {
        for ($j = 0; $j < $qtdeColunas; ++$j) {
            echo "{$matriz[$i][$j]} ";
        }
        echo "\n";
    }
}

$matriz = [];
//Lendo a matriz 5x5
for ($i = 0; $i < 5; ++$i) {
    $linha = [];
    for ($j = 0; $j < 5; ++$j) {
        echo "Informe o valor da posição $i x $j: ";
        $numero = readline();
        array_push($linha, $numero);
    }
    array_push($matriz, $linha);
}

printa_matriz(5, 5, $matriz);

//Inicializando as variáveis de soma
$somaLinha4 = 0;
$somaColuna2 = 0;
$somaDiagonalPrincipal = 0;
$somaDiagonalSecundaria = 0;
$somaElementosMatriz = 0;

//Calculando as somas
for ($i = 0; $i < 5; ++$i) {
    for ($j = 0; $j < 5; ++$j) {
        if ($i == 4) { //Se estamos na linha 4
            $somaLinha4 += $matriz[$i][$j];
        }
        if ($j == 2) { //Se estamos na coluna 2
            $somaColuna2 += $matriz[$i][$j];
        }
        if ($i == $j) { //Se estamos na diagonal principal
            $somaDiagonalPrincipal += $matriz[$i][$j];
        }
        if ($i + $j == 4) {
            $somaDiagonalSecundaria += $matriz[$i][$j];
        }
        $somaElementosMatriz += $matriz[$i][$j];
    }
}

//Printando as somas
echo "Soma dos elementos da linha 4: $somaLinha4\n";
echo "Soma dos elementos da coluna 2: $somaColuna2\n";
echo "Soma da diagonal principal: $somaDiagonalPrincipal\n";
echo "Soma da diagonal secundária: $somaDiagonalSecundaria\n";
echo "Soma de todos os elementos da matriz: $somaElementosMatriz\n";