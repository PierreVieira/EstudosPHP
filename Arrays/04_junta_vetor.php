<?php
function juntarVetor($vetor1, $vetor2) {
    /*
     * Estou assumindo que ambos os vetores terão o mesmo tamanho*/
    $vetor3 = [];
    foreach ($vetor1 as $numero) {
        array_push($vetor3, $numero);
    }

    foreach ($vetor2 as $numero) {
        array_push($vetor3, $numero);
    }

    return $vetor3;
}

$vetor1 = [1, 3, 5, 7, 9, 11];
$vetor2 = [2, 4, 6, 8, 10, 12];
print_r(juntarVetor($vetor1, $vetor2));
