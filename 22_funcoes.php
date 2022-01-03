<?php

function pt($value)
{
    echo "{$value} <br>";
}

function sum(int $n1, int $n2)
{
    return $n1 + $n2;
}

//echo sum(12, 90);

function sumTwo($n1, $n2, $taxa = 2)
{
    return ($n1 + $n2) * $taxa;
}

echo sumTwo(1, 2);