<?php
function somaVetor($vetor1, $vetor2) {
    /*
     * Estou supondo que $vetor1 e $vetor2 tem o mesmo tamanho*/
    $vetor3 = [];
    $i = 0;
    $tamanhoVetores = count($vetor1);
    while ($i <= $tamanhoVetores) {
        $soma = $vetor1[$i] + $vetor2[$i];
        array_push($vetor3, $soma);
        $i++;
    }
    return $vetor3;
}

$vetor1 = [1, 3, 5, 7, 9, 11];
$vetor2 = [2, 4, 6, 8, 10, 12];
print_r(somaVetor($vetor1, $vetor2));
