<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $num1 = isset($_POST['num1']) ? (float)$_POST['num1'] : null;
    $num2 = isset($_POST['num2']) ? (float)$_POST['num2'] : null;
    $operacion = isset($_POST['operaciones']) ? $_POST['operaciones'] : null;

    if ($operacion == "suma") {
        $resultado = sum($num1, $num2);
    } elseif ($operacion == "resta") {
        $resultado = resta($num1, $num2);
    } elseif ($operacion == "multiplicacion") {
        $resultado = mult($num1, $num2);
    } elseif ($operacion == "division") {
        $resultado = div($num1, $num2);
    }

    echo "El resultado de la $operacion es: $resultado";
}

function sum($val1, $val2) {
    return $val1 + $val2;
}

function resta($val1, $val2) {
    return $val1 - $val2;
}

function mult($val1, $val2) {
    return $val1 * $val2;
}

function div($val1, $val2) {
    if ($val2 == 0) {
        return "Incalculable";
    } elseif ($val1 == 0) {
        return "0";
    }
    return $val1 / $val2;
}
?>
