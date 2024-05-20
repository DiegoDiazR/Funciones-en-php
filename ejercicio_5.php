<?php
function invertir_cadena($cadena) {
    $longitud = strlen($cadena);
    
    $cadena_invertida = "";
    
    for ($i = $longitud - 1; $i >= 0; $i--) {
        $cadena_invertida .= $cadena[$i];
    }
    
    return $cadena_invertida;
}

$cadena_ejemplo = "1234abcd";

$resultado = invertir_cadena($cadena_ejemplo);
    
echo "Resultado: " . $resultado;
?>
