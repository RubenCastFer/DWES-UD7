<?php

function enviar()
{

    require "./models/servicioModel.php";
    $uri = "http://localhost/DWES-EJERCICIOS-CLASE/DWES-UD7/ejercicio4/servidor";
    
    $server = new SoapServer(null, array('uri' => $uri));
    $server->addFunction("getCiudades");
    $server->handle();

    // Función para obtener raíz cuadrada
    // function ciudades($num)
    // {
    //     $ciudades = getCiudades($num);
    //     return $ciudades;
    // }
}
