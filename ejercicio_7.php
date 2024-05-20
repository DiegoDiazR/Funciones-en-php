<?php
$inicio_rango = readline("Ingrese el numero con el cual iniciar el rango");
$final_rango = readline("Ingrese el numero con el cual finalizar el rango");
$numero = readline("ingrese un numero");


function verificar_rango($inicio, $numero, $final) {
    if ($numero >= $inicio && $numero <= $final) {
        return true;
    } else {
        return false;
    }
}




if (verificar_rango($inicio_rango, $numero, $final_rango)) {
    echo "$numero está dentro del rango entre $inicio_rango y $final_rango.";
} else {
    echo "$numero está fuera del rango ";
}
?>
