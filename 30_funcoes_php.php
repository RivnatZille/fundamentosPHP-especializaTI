<?php
date_default_timezone_set('America/Sao_Paulo');
echo 'O ano atual é: ' . date('Y') . '<br>';
echo 'O mês atual é: ' . date('m') . '<br>';
echo 'O dia atual é: ' . date('d') . '<br>';
echo 'A data atual é ' . date('d/m/Y') . '<br>';
echo 'A data atual é ' . date('Y-m-d') . '<br>';
echo 'Hora atual: ' . date('h') . '<br>';
echo 'Minuto atual: ' . date('i') . '<br>';
echo 'Segundo atual: ' . date('s') . '<br>';
echo 'Hora atual: ' . date('H:i:s') . '<br>';

echo 'Timezone: ' . date_default_timezone_get() . '<br>';
