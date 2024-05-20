<?php
$numero = readline("escriba un numero para saber si es primo o no");

function es_primo($numero) {
    if ($numero <= 1) {
        return false;
    }
    
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    

    return true;
}




if (es_primo($numero)) {
    echo "$numero es un número primo.";
} else {
    echo "$numero no es un número primo.";
}
?>
