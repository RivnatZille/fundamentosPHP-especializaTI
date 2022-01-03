<?php
/*
$cars = array(1, 'Carlos', 12.2);

$cars = ['Uno', 'Gol', 'Fusion', 'Civic'];

$car = [
    'cor' => 'Branco',
    'portas' => '4',
    'ano' => 2018
];
$car['airbag'] = true;
$car['som'] = 'Model 123';

var_dump($car['cor']);
$car['cor'] = 'Preto';
var_dump($car['cor']);
*/

$cars = [
    'Mercedes' => [
        'color' => 'black',
        'motor' => 5.2,
        'name' => 'AMG GT-R'
    ],
    'Ford' => [
        'color' => 'yellow',
        'motor' => 3.2,
        'name' => 'Focus'
    ],
    'Ferrari' => [
        'color' => 'red',
        'motor' => 10,
        'name' => '599X'
    ],
];

var_dump($cars['Ford']['name']);
$cars['Ford']['name'] = 'Fiesta';
var_dump($cars['Ford']['name']);