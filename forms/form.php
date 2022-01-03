<?php

if($_REQUEST['nome'] == '' || strlen($_REQUEST['nome']) <= 3) {
    echo 'O campo nome é inválido!';
    echo '<p><a href="forms.html">Voltar</a></p>';
    exit();
}

echo "Nome: {$_REQUEST['nome']}";
echo '<hr>';

echo "Senha: {$_REQUEST['senha']}";
echo '<hr>';

echo "E-mail: {$_REQUEST['email']}";
echo '<hr>';

echo "Concordou? " . isset($_REQUEST['concordo']) && $_REQUEST['concordo'] != '' ? 'Sim' : 'Não';
echo '<hr>';

echo "Sexo: {$_REQUEST['sexo']}";
echo '<hr>';

echo "Estado: {$_REQUEST['estado']}";
echo '<hr>';

echo "Descrição: {$_REQUEST['descricao']}";
echo '<hr>';

//  $_REQUEST pega de ambos POST e GET, porém, é um pouco mais lento

/*
// var_dump($_POST['nome']);
echo "Nome: {$_POST['nome']}";
echo '<hr>';

// var_dump($_POST['senha']);
echo "Senha: {$_POST['senha']}";
echo '<hr>';

// var_dump($_POST['email']);
echo "E-mail: {$_POST['email']}";
echo '<hr>';

// var_dump($_POST['concordo']);
echo "Concordou? " . isset($_POST['concordo']) && $_POST['concordo'] != '' ? 'Sim' : 'Não';
echo '<hr>';

// var_dump($_POST['sexo']);
echo "Sexo: {$_POST['sexo']}";
echo '<hr>';

// var_dump($_POST['estado']);
echo "Estado: {$_POST['estado']}";
echo '<hr>';

// var_dump($_POST['descricao']);
echo "Descrição: {$_POST['descricao']}";
echo '<hr>';
*/

echo '<p><a href="forms.html">Voltar</a></p>';