<?php
function maiorDois($a, $b)
{
    if ($a > $b) {
        return $a;
    }
    return $b;
}

echo "Informe um número: ";
$n1 = readline();
echo "Informe outro número: ";
$n2 = readline();
echo "O maior valor entre $n1 e $n2 é " . maiorDois($n1, $n2);
