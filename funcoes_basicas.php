<?php
    // isset()
    /*
    $valor = 0;
    if( isset($valor)){
        echo 'variavel iniciada';
    }else{
        echo 'variavel não iniciada';
    } */

    // empty
    // retorna true -> '', 0, '0, false, null, array()'
    /*
    $valor = 1;
    if(empty($valor)){
        echo 'Variavel vazia';
    }else{
        echo 'Variavel não vazia';
    }*/

    // is_numeric()

    $valor = 'texto';
    if(is_numeric($valor)){
        echo 'numero';
    }else{
        echo 'caracter';
    }
?>