<?php
function Dado()
{
    return rand(1, 6);
}

$arrayDadoResultado = [0, 0, 0, 0, 0, 0];
for ($i = 0; $i < 1000000; ++$i) {
    $arrayDadoResultado[Dado() - 1] += 1;
}
for ($i = 0; $i < 6; ++$i) {
    $valorDado = $i + 1;
    $qtdeVezesSaiuValor = $arrayDadoResultado[$i] / 10000;
    echo "Quantidade de vezes que o número {$valorDado} saiu: {$qtdeVezesSaiuValor}%\n";
}