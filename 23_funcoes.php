<?php

$taxa = 2;

function sum($n1, $n2)
{
    global $taxa;

    $teste = 12;
    $soma = ($n1 + $n2) * $taxa;

    return [
        'teste' => $teste, 
        'soma' => $soma
        ];
}

//echo sum(2, 2);
//$result = sum(1, 2);
//var_dump ($result['soma']);
//echo sum(2, 2)['soma'];