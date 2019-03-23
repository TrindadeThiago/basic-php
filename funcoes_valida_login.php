<?php
    function valida_login($login, $senha){
        $login_bd = 'thiago.trindade';
        $senha_bd = '4125';

        if($login == $login_bd && $senha == $senha_bd){
            return true;
        }

        return false;
    }
?>