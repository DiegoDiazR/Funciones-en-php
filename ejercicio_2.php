<?php
$lado_cuadrado = readline("Ingrese el lado del cuadrado en cm");
$radio_circulo = readline("Ingrese el radio del circulo");
$base_triangulo = readline("Ingrese la base del triangulo en cm");
$altura_triangulo = readline("ingrese la altura del triangulo en cm");

function area_cuadrado($lado) {
    return $lado * $lado;
}


function area_circulo($radio) {
    return pi() * $radio * $radio;
}


function area_triangulo($base, $altura) {
    return ($base * $altura) / 2;
}




echo "Área del cuadrado" . area_cuadrado($lado_cuadrado) . "\n";
echo "Área del círculo " . area_circulo($radio_circulo) . "\n";
echo "Área del triángulo con base $base_triangulo y altura $altura_triangulo: " . area_triangulo($base_triangulo, $altura_triangulo) . "\n";
?>
