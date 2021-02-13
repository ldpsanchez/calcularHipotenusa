<?php
    // Acceso al servidor
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
    // header('content-type: application/json; charset=utf-8');

    // Obteniendo la data del frontend
    $data = json_decode(file_get_contents("php://input"), true);
    $catetoA = $data["catetoA"];
    $catetoB = $data["catetoB"];

    // Calculando el valor de la hipotenusa 
    $hipotenusa = sqrt(pow($catetoA, 2) + pow($catetoB, 2));

    /* $lado = 2.3;
    $anguloInterior = 6;
    $area = $lado / 2 * tan($anguloInterior / 2);
    $apotema = 2.78; */

    // $areaOctogono = 4 * $lado * $apotema;

    // echo print_r($data);
    echo "$hipotenusa";
    // echo round($areaOctogono, 2, PHP_ROUND_HALF_UP);

?>