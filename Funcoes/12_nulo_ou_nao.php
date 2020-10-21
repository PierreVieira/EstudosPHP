<?php
function valorNulo($valor) {
    if ($valor == null) {
        echo "Valor nulo\n";
    } else {
        echo "Valor não nulo\n";
    }
}

valorNulo(2);
valorNulo(null);
valorNulo('null');