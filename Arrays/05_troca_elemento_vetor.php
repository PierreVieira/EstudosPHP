<?php
$vetor = [];
$i = 0;
//Faz a leitura
while ($i < 20){
    echo "Informe um v[{$i}]: ";
    $numero = readline();
    $i++;
    array_push($vetor, $numero);
}
echo "Vetor original: ";
print_r($vetor);
$i = 0;
$j = 19;
//Faz a troca
while ($i < 10) {
    $aux = $vetor[$i];
    $vetor[$i] = $vetor[$j];
    $vetor[$j] = $aux;
    $i++;
    $j--;
}
echo "Vetor trocado: ";
print_r($vetor);