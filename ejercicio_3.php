<?php
function sumar_lista($lista) {
    $suma = 0;
    
    foreach ($lista as $numero) {
        $suma += $numero;
    }
    

    return $suma;
}


$lista_muestras = array(8, 2, 3, 0, 7);


$resultado = sumar_lista($lista_muestras);


echo "Resultado : " . $resultado;
?>
