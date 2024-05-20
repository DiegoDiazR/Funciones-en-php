<?php
function multiplicar_lista($lista) {
    $producto = 1;
    

    foreach ($lista as $numero) {
        $producto *= $numero;
    }
    

    return $producto;
}


$lista_muestra = array(8, 2, 3, -1, 7);


$resultado = multiplicar_lista($lista_muestra);


echo "Resultado: " . $resultado;
?>
