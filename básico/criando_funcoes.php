<?php
    $nome = 'Thiago';
    //Função sem retorno
    function exibir_boas_vindas($nome){
        echo "Seja bem-vindo, ".$nome;
    }

    $num1 = 15;
    $num2 = 5;
    //Função com retorno
    function calcular($num1, $num2){
        return $num1+$num2;
    }

    //Chamar função
    exibir_boas_vindas($nome);
    echo '<br/><br/>';
    echo calcular($num1, $num2);
?>