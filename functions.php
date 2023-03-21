<?php

function generaPassword($lunghezza = 10) {
    if ($lunghezza < 8) {
        return "La lunghezza minima della password deve essere di almeno 8 caratteri";
    }
    $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()';
    $numeroCaratteri = strlen($caratteri);
    $passwordCasuale = '';
    for ($i = 0; $i < $lunghezza; $i++) {
        $passwordCasuale .= $caratteri[rand(0, $numeroCaratteri - 1)];
    }
    return $passwordCasuale;
}
?>