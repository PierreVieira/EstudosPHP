<?php
function converteCelciusEmFarenheit($tempCelcius) {
    return (9 * $tempCelcius / 5) + 32;
}

function converteFarenheitEmCelcius($tempFarenheit) {
    return 5 * ($tempFarenheit - 32) / 9;
}

do {
    echo "Informe a unidade da temperatura [C/F]: ";
    $opcao = strtoupper(readline());
    if ($opcao != "C" && $opcao != "F") {
        echo "As únicas opções válidas são C e F!\n";
    }
} while ($opcao != "C" && $opcao != "F");

switch ($opcao) {
    case "C":
        echo "Informe a temperatura em graus celcius: ";
        $temperatura = readline();
        echo "$temperatura °C = " . converteCelciusEmFarenheit($temperatura) . " °F";
        break;
    default:
        echo "Informe a temperatura em graus farenheit: ";
        $temperatura = readline();
        echo "$temperatura °F = " . converteFarenheitEmCelcius($temperatura) . " °C";
        break;
}
