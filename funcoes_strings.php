<?php
    $texto = 'Teste de Conversao de String';
    $texto2 = 'tudo em minusculo';
    $texto3 = '000.000.000.-00';
    $texto4 = 'Entenda porque seu smartphone esquenta tanto, se você tem um smartphone';

    //strtolower
    echo strtolower($texto).'<br/>';

    //strtoupper
    echo strtoupper($texto).'<br/>';

    // ucfirst
    echo ucfirst($texto2).'<br/>';

    //strlen
    echo strlen($texto).'<br/>';

    //str_replace
    $cpf =  str_replace('.', '', $texto3);
    $cpf =  str_replace('-', '', $cpf);
    echo $cpf.'<br/>';

    //substr
    $noticia = substr($texto4, 0, 44);
    echo $noticia.'...';
?>