<?php
function maiorDois($a, $b)
{
    if ($a > $b) {
        return $a;
    }
    return $b;
}

function maiorTres($a, $b, $c)
{
    $maiorEntreAeB = maiorDois($a, $b);
    if ($c > $maiorEntreAeB) {
        return $c;
    }
    return $maiorEntreAeB;
}

echo "Informe um número: ";
$n1 = readline();
echo "Informe outro número: ";
$n2 = readline();
echo "Informe outro número: ";
$n3 = readline();
echo "O maior valor entre $n1, $n2 e $n3 é " . maiorTres($n1, $n2, $n3);
