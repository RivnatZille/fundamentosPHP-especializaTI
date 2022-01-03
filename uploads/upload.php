<?php

$photos = $_FILES['photos'];
$path = 'uploads/imgs/';

if (!is_dir($path)) {
    mkdir('uploads');
    mkdir($path);
}

for($i = 0; $i < count($photos['name']); $i++) {
    $j = $i + 1;
    if(move_uploaded_file($photos['tmp_name'][$i], $path . $photos['name'][$i]) ) {
        echo "Sucesso ao mover o {$j}o arquivo <br>";
    } else {
        echo "Falha ao mover o {$j}o arquivo <br>";
    }
}

echo '<p><a href="form.html">Voltar</a></p>';