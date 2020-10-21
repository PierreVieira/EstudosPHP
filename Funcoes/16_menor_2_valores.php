<?php
function menorDois($a, $b)
{
    if ($a > $b) {
        return $b;
    }
    return $a;
}

echo "Informe um número: ";
$n1 = readline();
echo "Informe outro número: ";
$n2 = readline();
echo "O maior valor entre $n1 e $n2 é " . menorDois($n1, $n2);
