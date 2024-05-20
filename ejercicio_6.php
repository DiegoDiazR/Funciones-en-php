<?php
$numero = readline("escriba un numero");
function factorial($n) {
    if ($n < 0) {
        return "Escriba un numero positivo.";
    }
    

    $factorial = 1;
    

    for ($i = 2; $i <= $n; $i++) {
        $factorial *= $i;
    }
    
    return $factorial;
}



echo "El factorial es: " . factorial($numero);
?>
