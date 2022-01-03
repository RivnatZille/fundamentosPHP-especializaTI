<?php

$cart = [
    0 => 'Macarrão',
    1 => 'Feijão',
    2 => 'Arroz',
    3 => 'Batata'
];
//organização alfabética em ordem decrescente (z->a)
arsort($cart);
var_dump($cart);
echo '<hr>';

//alfabética em ordem crescente (a->z)
asort($cart);
var_dump($cart);
echo '<hr>';

//organização numérica crescente + alfabética em ordem crescente
sort($cart);
var_dump($cart);
echo '<hr>';