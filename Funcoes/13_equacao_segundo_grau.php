<?php
function valorDelta($a, $b, $c)
{
    return $b * $b - 4 * $a * $c;
}

echo "Informe o valor de a: ";
$a = readline();
echo "Informe o valor de b: ";
$b = readline();
echo "Informe o valor de c: ";
$c = readline();
echo "Valor de delta: " . valorDelta($a, $b, $c);