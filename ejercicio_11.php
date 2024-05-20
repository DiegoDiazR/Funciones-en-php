<?php
$entrada = readline("Ingrese la lista de números separados por comas: ");

$lista = explode(',', $entrada);

function imprimir_pares($lista) {
    foreach ($lista as $numero) {
        if ($numero % 2 == 0) {
            echo $numero . " ";
        }
    }
}




echo "Números pares de la lista: ";
imprimir_pares($lista);
?>
