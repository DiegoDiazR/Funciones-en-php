<?php
$lista_base = array(1, 2, 2, 3, 4, 4, 5);
$lista_con_elementos_unicos = elementos_unicos($lista_base);

function elementos_unicos($lista) {
    $lista_unica = array_unique($lista);
    
    $lista_unica = array_values($lista_unica);
    
    return $lista_unica;
}


print_r($lista_con_elementos_unicos);
?>
