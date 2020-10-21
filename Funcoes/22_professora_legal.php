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

function prova($n1, $n2, $n3)
{
    $mediaTresNotas = ($n1 + $n2 + $n3) / 3;
    $menorNota = menorTres($n1, $n2, $n3);
    $maiorNota = maiorTres($n1, $n2, $n3);
    if ($n1 == $menorNota) {
        $mediaDuasMaiores = ($n2 + $n3) / 2;
    } else if ($n2 == $menorNota) {
        $mediaDuasMaiores = ($n1 + $n3) / 2;
    } else {
        $mediaDuasMaiores = ($n1 + $n2) / 2;
    }
    echo "Média das 3 notas: $mediaTresNotas\n";
    echo "Média com as 2 notas mais altas: $mediaDuasMaiores\n";
    echo "Maior nota: $maiorNota\n";
    echo "Menor nota: $menorNota\n";
}

echo "Informe a primeira nota: ";
$n1 = readline();
echo "Informe a segunda nota: ";
$n2 = readline();
echo "Informe a terceira nota: ";
$n3 = readline();
prova($n1, $n2, $n3);
