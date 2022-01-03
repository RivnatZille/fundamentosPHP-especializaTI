<?php

$file = fopen('log.log', 'a+');
while(!feof($file)) {
    echo fgets($file, 4096 . '<br>');
}
fclose($file);