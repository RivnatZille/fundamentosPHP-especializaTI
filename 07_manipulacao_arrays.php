<?php

/*$nomes = [
    'Carlos',
    'EspecializaTI',
    'Company'
];*/

$name = 'Carlos';
$company = 'EspecializaTI';
$year = 2018;

$infoCompany = compact('name', 'company', 'year');
//var_dump($infoCompany);

//var_dump(is_array($infoCompany));

var_dump(in_array('Carlos2', $infoCompany));