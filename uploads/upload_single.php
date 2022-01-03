<?php

$photo = $_FILES['foto'];
$path = 'uploads/imgs/';
//move_uploaded_file($photo['tmp_name'], $photo['name']);

if (move_uploaded_file($photo['tmp_name'], $path . $photo['name'])) {
    echo 'Sucesso!';
} else {
    echo 'Falhou!';
}

echo '<p><a href="form.html">Voltar</a></p>';