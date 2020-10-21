<?php
function valorDelta($a, $b, $c)
{
    return $b ** 2 - 4 * $a * $c;
}

function encontraRaizes($a, $b, $c) {
    $delta = valorDelta($a, $b, $c);
    $x1 = (-$b + $delta ** 0.5) / (2 * $a);
    $x2 = (-$b - $delta ** 0.5) / (2 * $a);
    if ($delta == 0) {
        echo "Raiz única: " . $x1;
    } else {
        echo "x1: " . $x1 . "\n";
        echo "x2: " . $x2 . "\n";
    }
}
echo "Informe o valor de a: ";
$a = readline();
echo "Informe o valor de b: ";
$b = readline();
echo "Informe o valor de c: ";
$c = readline();
encontraRaizes($a, $b, $c);