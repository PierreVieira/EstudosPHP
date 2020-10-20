<?php
function copiaVetor($vetor) {
    $vetorCopia = [];
    foreach ($vetor as $numero) {
        array_push($vetorCopia, $numero);
    }
    return $vetorCopia;
}

$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$resultadoCopia = copiaVetor($numeros);
print_r($resultadoCopia);
