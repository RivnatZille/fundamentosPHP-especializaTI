<?php

$var1 = 'Algo';
$var2 = 'Outro';

$var3 = $var1 . ' ' . $var2 . ' ' . 12;
//echo $var3;

$name = 'Carlos Ferreira';
$company = 'EspecializaTI';

//echo 'O '. $name . ' é fundador da Empresa ' . $company;
echo "O {$name} é fundador da Empresa: {$company}";

// aspas simples para quando não for imprimir nenhuma variável
// aspas duplas para quando for imprimir alguma variável