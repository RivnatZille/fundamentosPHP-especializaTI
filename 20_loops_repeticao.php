<?php

$names = ['a', 'b', 'c', 'd'];

$i = 0;

while ($i < count($names)) {
    echo "{$names[$i]} <br>";
    $i++;
}

echo '<hr>';

$a = 1;
do {
    echo "{$a} ";
    $a++;
} while ($a <= 10);