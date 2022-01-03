<?php

$a = 2;
$b = 5;

$result = $a + $b;
echo "O resultado da soma entre {$a} + {$b} é igual a = {$result} <br>";

$result = $b - $a;
echo "O resultado da subtração entre {$b} - {$a} é igual a = {$result} <br>";

$result = $b * $a;
echo "O resultado da multiplicação entre {$b} * {$a} é igual a = {$result} <br>";

$result = $b / $a;
echo "O resultado da divisão entre {$b} / {$a} é igual a = {$result} <br>";

$result = $b % $a;
echo "O resultado do resto da divisão entre {$b} % {$a} é igual a = {$result} <br>";

if ($b % 2 == 0) {
    echo 'O valor é par.<br>';
} else {
    echo 'O valor é impar.<br>';
}

$result = (2 + (2 - 10) / 4) * 2;
echo $result;