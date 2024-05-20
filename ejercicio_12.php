<?php
$frase = readline("Escriba una frase");

function es_palindromo($cadena) {
    $cadena = strtolower(preg_replace('/[^A-Za-z0-9]/', '', $cadena));
    

    $cadena_invertida = strrev($cadena);
    

    if ($cadena === $cadena_invertida) {
        return true;
    } else {
        return false;
    }
}




if (es_palindromo($frase)) {
    echo "'$frase' es un palíndromo.";
} else {
    echo "'$frase' no es un palíndromo.";
}
?>
