<?php

$content = 'Algo aqui';
$file = 'test.txt';

if (file_exists($file)) {
    //file_put_contents('test.txt', $content);
    var_dump(file_get_contents($file));
} else {
    echo 'Arquivo não existe!';
}
