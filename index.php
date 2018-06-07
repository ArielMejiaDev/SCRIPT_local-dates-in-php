<?php 
    setlocale(LC_ALL, "es_GT.UTF-8", "es_GT", "esp");
    // setlocale(LC_ALL, "Spanish_Spain.1252");
    echo 'Fecha Actual en formato americano: ' . date('Y-m-d');
    echo '</br>';
    echo 'Ultimo dia del mes: ' . date('Y-m-t');
    echo '</br>';
    $a_date = "2009-11-23";
    echo 'Ultimo dia de una fecha pasado por variable: del 2009/11: ' . date("Y-m-t", strtotime($a_date));
    echo '</br>';
    $timestamp = strtotime("5th February 1993");
    echo "Año en 4 digitos Ejemplo extraido de una fecha en texto asi: 5th February 1993 : " . date("Y", $timestamp);
    echo "<br />";
    echo "Año en 2 digitos Ejemplo extraido de una fecha en texto asi: 5th February 1993 : " . date("y", $timestamp);
    echo '</br>';
    $date = date("Y-m-d");
    echo 'Mes en formato de texto: ' . date("F", strtotime($date));
    $date = date("Y-m-d");
    echo '</br>';
    echo 'Mes en formato numerico: ' . date("m", strtotime($date));
    echo '</br>';
    echo strftime("%A %d de %B del %Y");
    date_default_timezone_set('America/Guatemala');
    $horainicio = date('Y-m-d h:i:s'); 
    echo '</br>';
    echo 'Zona Horaria Guatemala' . $horainicio;
    echo '</br>';
    $d = date("Y-m-d");
    $fecha = strftime(" a los %d dias del mes de %B de %Y.", strtotime($d));
    echo $fecha;
    echo '</br>';
    $fechaDada = '2018-06-01';
    $fechaFormateada = strftime('%B', strtotime($fechaDada));
    echo 'Mes de la fecha dada en español: ' . $fechaFormateada;
    echo '</br>';
    $numeroSinFormato = 1234.56;
    // notación francesa
    $formatoMonedaGt = number_format($numeroSinFormato, 2, '.', ',');
    // 1 234,56
    echo $formatoMonedaGt;
?>