<?php
$cadena = readline("Ingrese la cadena");

function contar_mayusculas_minusculas($cadena) {
    $mayusculas = 0;
    $minusculas = 0;
    
    for ($i = 0; $i < strlen($cadena); $i++) {
        if (ctype_upper($cadena[$i])) {
            $mayusculas++;
        }
        elseif (ctype_lower($cadena[$i])) {
            $minusculas++;
        }
    }
    
    return array("mayusculas" => $mayusculas, "minusculas" => $minusculas);
}



$resultado = contar_mayusculas_minusculas($cadena);
echo "Número de letras mayúsculas: " . $resultado['mayusculas'] . "\n";
echo "Número de letras minúsculas: " . $resultado['minusculas'];
?>
