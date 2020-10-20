<?php
/**
 * @param int $qtdeLinhas
 * @param int $qtdeColunas
 * @param array $matriz
 * @param string $tipo
 */
function printa_matriz(int $qtdeLinhas, int $qtdeColunas, array $matriz, string $tipo) {
    echo "========== PRINTANDO MATRIZ $tipo ==========\n";
    for ($i = 0; $i < $qtdeLinhas; ++$i) {
        for ($j = 0; $j < $qtdeColunas; ++$j) {
            echo "{$matriz[$i][$j]} ";
        }
        echo "\n";
    }
}

//Pega os dados de construção da matriz
echo "Informe a quantidade de linhas da matriz: ";
$qtdeLinhas = readline();
echo "Informe a quantidade de colunas da matriz: ";
$qtdeColunas = readline();
$matriz = [];

//Preenche a matriz
for ($i = 0; $i < $qtdeLinhas; ++$i) {
    $linha = [];
    for ($j = 0; $j < $qtdeColunas; ++$j) {
        echo "Informe matriz[$i][$j]: ";
        $numero = readline();
        array_push($linha, $numero);
    }
    array_push($matriz, $linha);
}

printa_matriz($qtdeLinhas, $qtdeColunas, $matriz, "NORMAL");

$matrizTransposta = [];
//Faz a transposta
for ($i = 0; $i < $qtdeColunas; ++$i) {
    $linha = [];
    for ($j = 0; $j < $qtdeLinhas; ++$j) {
        array_push($linha, $matriz[$j][$i]);
    }
    array_push($matrizTransposta, $linha);
}
printa_matriz($qtdeColunas, $qtdeLinhas, $matrizTransposta, "TRANSPOSTA");