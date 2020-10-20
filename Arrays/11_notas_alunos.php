<?php
echo "Informe a quantidade de alunos: ";
$quantidadeAlunos = readline();
$notas = [];

//Preenche o array de notas
for ($i = 1; $i <= $quantidadeAlunos; ++$i) {
    echo "Informe a nota do aluno {$i}°: ";
    array_push($notas, readline());
}

//Inicialização das variáveis de média
$abaixoMedia = 0;
$naMedia = 0;

//Calculo de quantos alunos estão e não estão na média
for ($i = 0; $i < $quantidadeAlunos; ++$i) {
    //A questão quer saber quantos estão na média e quantos estão abaixo. Perceba que não pede os que estão acima da média.
    if ($notas[$i] < 60) {
        $abaixoMedia++;
    } else if ($notas[$i] == 60) {
        $naMedia++;
    }
}
echo "Alunos abaixo da média: $abaixoMedia\n";
echo "Alunos na média: $naMedia\n";
