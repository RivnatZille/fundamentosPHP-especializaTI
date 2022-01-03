<?php
$text = 'Hoje é um lindo dia';
generateLog($text);

function generateLog($text) 
{
    $file = fopen('log.log', 'a+');
    fwrite($file, "{$text} \r\n");
    fclose($file); 
}

