<?php

$cache = array();

function calcularFibonacci($n) {
    global $cache;

    if (isset($cache[$n])) {
        return $cache[$n];
    }

    if ($n <= 1) {
        $resultado = $n;
    } else {
        $resultado = calcularFibonacci($n - 1) + calcularFibonacci($n - 2);
    }

    $cache[$n] = $resultado;
    return $resultado;
}

if (isset($_GET['n'])) {
    $n = intval($_GET['n']);

    if ($n >= 0) {
        $resultado = calcularFibonacci($n);
        echo json_encode(array("valor" => $resultado));
    } else {
        echo json_encode(array("error" => "El valor de 'n' debe ser un número entero no negativo."));
    }
} else {
    echo json_encode(array("error" => "Se requiere el parámetro 'n'."));
}
?>
