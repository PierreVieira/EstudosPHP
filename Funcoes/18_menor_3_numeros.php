<?php
function menorDois($a, $b)
{
    if ($a > $b) {
        return $b;
    }
    return $a;
}

function menorTres($a, $b, $c)
{
    $menorTresAeb = menorDois($a, $b);
    if ($c < $menorTresAeb) {
        return $c;
    }
    return $menorTresAeb;
}

echo "Informe um número: ";
$n1 = readline();
echo "Informe outro número: ";
$n2 = readline();
echo "Informe outro número: ";
$n3 = readline();
echo "O maior valor entre $n1, $n2 e $n3 é " . menorTres($n1, $n2, $n3);
