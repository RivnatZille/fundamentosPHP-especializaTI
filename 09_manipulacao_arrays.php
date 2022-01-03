<?php

$cart = [
    'Arroz',
    'Sabão',
    'Feijão',
    'Balinhas'
];

var_dump($cart);
echo '<hr>';

//remove o ultimo item de uma array
array_pop($cart);
var_dump($cart);
echo '<hr>';

//remove o primeiro item de uma array
array_shift($cart);
var_dump($cart);
echo '<hr>';

//remove o item especificado de uma array
unset($cart[0]);
var_dump($cart);
echo '<hr>';

//adiciona um item novo no fim da array
array_push($cart, 'Tapete');
var_dump($cart);
echo '<hr>';

//adiciona um item no inicio da array
array_unshift($cart, 'Micro-ondas');
array_unshift($cart, 'Tapete');
var_dump($cart);
echo '<hr>';

//remove elementos repetidos de uma array
$cart = array_unique($cart);
var_dump($cart);
echo '<hr>';